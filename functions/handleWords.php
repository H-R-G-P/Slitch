<?php
/*$_POST['lang'] = 'PL';
$_POST['text'] = 'Rzeka plyla dlugo.';
*/?>
 <!DOCTYPE html>
 <html lang="<?php echo $_POST['lang'] ?>">
	<head>
		<title>Slitch</title>
		<meta charset='utf-8'>
        <script src="http://localhost/libraries/jquery-3.5.1.js"></script>
        <style>
            #buttonBack {
                bottom: 8px;
                position: fixed;
                background-color: lightgray;
                border: black 0.5px solid;
                border-radius: 3px;
                opacity: 80%;
            }
            #buttonBack:hover { background: darkgray; } /* при наведении курсора мышки */
            #buttonBack:active { background: #dddcdc; } /* при нажатии */
        </style>
	</head>
	<body>
        <?php
        if ($_POST['lang'] === 'EN')
            {
                echo "<h3>This is english text.</h3>";
            }elseif ($_POST['lang'] === 'EN')
            {
                echo "<h3>This is polish text.</h3>";
            }else
            {
                echo "<h3>This is ".$_POST['lang']." text.</h3>";
            }
        ?>
        <?php
        require_once('../classes/Word.php');
        require_once('../classes/Processor.php');

        use classes\Processor;

        $processor = new Processor($_POST['text'], $_POST['lang']);

        foreach($processor->getNotLearnedWords() as $key => $word)
        {
            print $key . $word->toCheckbox() . "<b class='wordsSeparately'>" . $word . "</b>" . "&nbsp&nbsp&nbsp" . "<i>( " . $word->getContext() . ")</i>" . "<br>";
        }
        ?>
        <hr>
		<button id='btn_reset' onclick="resetCheckboxes()">Reset checkboxes</button>
        <button type="button" onclick="send()">send</button>
        <button type="button" onclick="deleteWord()">del</button>
        <button type="button" onclick="generateListOfOnlyWords()">list of only words</button>
        <button type="button" onclick="generateWordsWithTranslatesInContext()">words with translates in context</button>
        <hr>
        <div class="deleteFun">
            <input type='text' name='deleteWord' placeholder='Word for deleting' id='delete'>
            <label for='delete'>Click 'Del' and word will deleted.</label>
        </div>
        <hr style="margin-bottom: 30px">
        <form action="../index.php" method="post">
            <button type="submit" id="buttonBack">Back</button>
        </form>

        <script type="text/javascript">
			'use strict'

            let checkboxes = $('.checkbox');
            let deleteWords = $('#delete');

			function resetCheckboxes() {
				for (let i = 0; i < checkboxes.length; ++i) {
				    checkboxes[i].checked = false;
                }
			}

			function send() {
			    let ajaxData = [];
			    for (let i = 0; i < checkboxes.length; ++i) {
				    if (checkboxes[i].checked) ajaxData.push(checkboxes[i].name);
                }

                $.ajax({
                    url: '../ajax/add.php',
                    type: 'POST',
                    cache: false,
                    data: { checkboxes: ajaxData, lang: '<?php echo $_POST['lang'] ?>' },
                    dataType: 'text',
                    success: function (data) {
                        alert(data);
                    }
                })
            }

            function deleteWord() {

                $.ajax({
                    url: '../ajax/delete.php',
                    type: 'POST',
                    cache: false,
                    data: { deleteWord: deleteWords.val(), lang: '<?php echo $_POST['lang'] ?>' },
                    dataType: 'text',
                    success: function (data) {
                        deleteWords.val("");
                        alert(data);
                    }
                })
            }

            function generateListOfOnlyWords() {
                let wordsSeparatelyHTML = document.getElementsByClassName('wordsSeparately');
                let input = document.createElement('input')
                input.name = "words[]";

                let wordsSeparately = [];
			    for (let i = 0; i < wordsSeparatelyHTML.length; ++i) {
				    wordsSeparately.push(wordsSeparatelyHTML[i].innerText);
                }

                let innerHTML = "";

                for (let i = 0; i < wordsSeparately.length; ++i) {
                    input.setAttribute("value", wordsSeparately[i])
                    innerHTML += input.outerHTML;
                }

                let form = document.createElement('form');
                form.action = 'listOfOnlyWords.php';
                form.method = 'POST';

                form.innerHTML = innerHTML;

                document.body.append(form);

                form.submit();
            }

            function generateWordsWithTranslatesInContext() {
                let wordsInContextHTML = document.getElementsByClassName('wordsInContext');

			    let wordsInContext = [];
			    for (let i = 0; i < wordsInContextHTML.length; ++i) {
				    wordsInContext.push(wordsInContextHTML[i].innerText);
                }

                let input1 = document.createElement('input');
                input1.name = "wordsSeparately[]";
			    let inputWordsSeparately = input1;

                let input2 = document.createElement('input');
                input2.name = "wordsInContext[]";
                let inputWordsInContext = input2;

                let innerHTML = "";

                for (let i = 0; i < checkboxes.length; ++i) {
                    inputWordsSeparately.setAttribute("value", checkboxes[i].name)
                    innerHTML += inputWordsSeparately.outerHTML;
                }
                for (let i = 0; i < wordsInContext.length; ++i) {
                    inputWordsInContext.setAttribute("value", wordsInContext[i])
                    innerHTML += inputWordsInContext.outerHTML;
                }

                let form = document.createElement('form');
                form.style.hidden;
                form.action = 'wordsWithTranslatesInContext.php';
                form.method = 'POST';

                form.innerHTML = innerHTML;

                document.body.append(form);

                form.submit();
            }
		</script>
	</body>
 </html>
