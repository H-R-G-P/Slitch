<?php require APPROOT.'/views/inc/header.php'; ?>
<?php foreach ($data['notLearnedWords'] as $word) : ?>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="btn-group-toggle btn-group" data-toggle="buttons">
            <label class="btn btn-outline-secondary">
                <input type="checkbox" name="<?php echo $word; ?>" class="myCheckboxes form_learned_words" autocomplete="off"> Learned
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" name="<?php echo $word; ?>" class="myCheckboxes form_untranslatable_words" autocomplete="off"> Untranslatable
            </label>
        </div>
        <span class="input-group-text font-weight-bold myText"><?php echo $word; ?></span>
    </div>
    <div class="form-control myText h-auto" style="background-color: #e9ecef"><?php echo $word->getContext(); ?></div>
</div>
<?php endforeach; ?>
<br>
<br>
<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark text-center">
  <a class="navbar-brand" href="#">Functions</a>
    <div class="btn-group">
        <button onclick="save()" class="btn btn-danger nav-item">Save</button>
        <button onclick="resetCheckboxes()" class="btn btn-danger nav-item">Reset</button>
    </div>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" onclick="putInModalWords()" href="#" data-toggle="modal" data-target="#wordsModal">Words</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="putInModalWordsFormContext()" href="#" data-toggle="modal" data-target="#wordsModal">Words in context</a>
      </li>
    </ul>
</nav>

<div class="modal fade" id="wordsModal" tabindex="-1" role="dialog" aria-labelledby="wordsModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" onclick="copyToClipboard('listOfWordsInModal')" class="btn btn-primary">Copy</button>
        <h5 class="modal-title ml-auto" id="wordsModalTitle">Words</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="listOfWordsInModal"></div>
      <div class="modal-footer">
        <button type="button" onclick="copyToClipboard('listOfWordsInModal')" class="btn btn-primary mr-auto">Copy</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    'use strict'

    function resetCheckboxes() {
        let checkboxes = $('.myCheckboxes');
        for (let i = 0; i < checkboxes.length; ++i) {
            checkboxes[i].checked = false;
            checkboxes[i].labels[0].classList.toggle('active', false);
        }
    }

    function disableSelectedWords() {
        let checkboxes = $('.myCheckboxes');
        let texts = $('.myText');
        if (checkboxes.length !== texts.length) {
            alert('Error: length of checkboxes not equal length of texts');
            return;
        }
        for (let i = 0; i < checkboxes.length; ++i) {
            let labelClasses = checkboxes[i].labels[0].classList;
            if (labelClasses.contains('active')) {
                // Disable checkbox
                checkboxes[i].checked = false;
                labelClasses.remove('active');
                labelClasses.add('disabled');
                // Disable text
                texts[i].classList.toggle('font-weight-bold', false);
                texts[i].classList.add('bg-light', 'text-info', 'veryLightText');
                // If first checkbox in group
                if (checkboxes[i].classList.contains('form_learned_words')) {
                    ++i;
                    // Disable next checkbox
                    checkboxes[i].checked = false;
                    checkboxes[i].labels[0].classList.toggle('active', false);
                    checkboxes[i].labels[0].classList.add('disabled');
                    // Disable next text
                    texts[i].classList.add('bg-light', 'text-info', 'veryLightText');
                }
                // If second checkbox in group
                if (checkboxes[i].classList.contains('form_untranslatable_words')) {
                    // Disable prev checkbox
                    checkboxes[i-1].labels[0].classList.add('disabled');
                    // Disable prev text
                    texts[i-1].classList.toggle('font-weight-bold', false);
                    texts[i-1].classList.add('bg-light', 'text-info', 'veryLightText');
                }
            }

        }
    }

    function save() {
        let learnedWordsData = [];
        let untranslatableWordsData = [];
        let learnedWords = $('.form_learned_words');
        let untranslatableWords = $('.form_untranslatable_words');
        for (let i = 0; i < learnedWords.length; ++i) {
            if (learnedWords[i].checked) learnedWordsData.push(learnedWords[i].name);
        }
        for (let i = 0; i < untranslatableWords.length; ++i) {
            if (untranslatableWords[i].checked) untranslatableWordsData.push(untranslatableWords[i].name);
        }

        $.ajax({
            url: '<?php echo URLROOT; ?>/stuffs/handle/<?php echo $data['stuff']->id; ?>',
            type: 'POST',
            cache: false,
            data: {
                learnedWords: learnedWordsData,
                untranslatableWords: untranslatableWordsData,
                language: "<?php echo $data['stuff']->language; ?>"
            },
            dataType: 'text',
            success: function () {
                disableSelectedWords();
                alert('Words added');
            }
        })
    }

    function getWordsFromCheckboxes() {
        let checkboxes = document.getElementsByClassName('form_learned_words');

        let words = [];
        for (let i = 0; i < checkboxes.length; ++i) {
            words.push(checkboxes[i].name);
        }

        return words;
    }

    function getWordsFromContext() {
        let wordsInContextHTML = document.getElementsByClassName('wordsInContext');

        let wordsInContext = [];
        for (let i = 0; i < wordsInContextHTML.length; ++i) {
            wordsInContext.push(wordsInContextHTML[i].innerText);
        }

        return wordsInContext;
    }

    function putInModalWords() {
        let modalBody = document.getElementById('listOfWordsInModal');
        let words = getWordsFromCheckboxes();
        modalBody.innerHTML = '';

        for (let i = 0; i < words.length; ++i) {
            modalBody.innerHTML += (words[i]+'<br>');
        }
    }

    function putInModalWordsFormContext() {
        let modalBody = document.getElementById('listOfWordsInModal');
        let wordsInContext = getWordsFromContext();
        modalBody.innerHTML = '';

        for (let i = 0; i < wordsInContext.length; ++i) {
            modalBody.innerHTML += (wordsInContext[i]+'<br>');
        }
    }
</script>
<?php require APPROOT.'/views/inc/footer.php'; ?>