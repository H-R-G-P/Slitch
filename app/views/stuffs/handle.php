<?php require APPROOT.'/views/inc/header.php'; ?>
<?php foreach ($data['notLearnedWords'] as $word) : ?>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="btn-group-toggle btn-group" data-toggle="buttons">
            <label class="btn btn-outline-secondary">
                <input type="checkbox" name="<?php echo $word; ?>" class="myCheckboxes form_learned_words" autocomplete="off"> Learned
            </label>
            <label class="btn btn-outline-secondary">
                <input type="checkbox" name="<?php echo $word; ?>" class="myCheckboxes form_not_translated_words" autocomplete="off"> Not translated
            </label>
        </div>
        <span class="input-group-text font-weight-bold myText"><?php echo $word; ?></span>
    </div>
    <div class="form-control myText" style="background-color: #e9ecef"><?php echo $word->getContext(); ?></div>
</div>
<?php endforeach; ?>
<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark text-center">
  <a class="navbar-brand" href="#">Functions</a>
    <div class="btn-group">
        <button onclick="save()" class="btn btn-danger nav-item">Save</button>
        <button onclick="resetCheckboxes()" class="btn btn-danger nav-item">Reset</button>
    </div>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">List of words</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Words and words in context</a>
      </li>
    </ul>
</nav>
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
                if (checkboxes[i].classList.contains('form_not_translated_words')) {
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
        let notTranslatedWordsData = [];
        let learnedWords = $('.form_learned_words');
        let notTranslatedWords = $('.form_not_translated_words');
        for (let i = 0; i < learnedWords.length; ++i) {
            if (learnedWords[i].checked) learnedWordsData.push(learnedWords[i].name);
        }
        for (let i = 0; i < notTranslatedWords.length; ++i) {
            if (notTranslatedWords[i].checked) notTranslatedWordsData.push(notTranslatedWords[i].name);
        }

        $.ajax({
            url: '<?php echo URLROOT; ?>/stuffs/handle/<?php echo $data['stuff']->id; ?>',
            type: 'POST',
            cache: false,
            data: {
                learnedWords: learnedWordsData,
                notTranslatedWords: notTranslatedWordsData,
                language: "<?php echo $data['stuff']->language; ?>"
            },
            dataType: 'text',
            success: function () {
                disableSelectedWords();
                alert('Words added');
            }
        })
    }
</script>
<?php require APPROOT.'/views/inc/footer.php'; ?>