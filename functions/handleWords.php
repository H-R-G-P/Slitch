 <!DOCTYPE html>
 <html lang="en">
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
        require_once('../classes/Word.php');
        require_once('../classes/Processor.php');

        use classes\Processor;

        $processor = new Processor($_POST['text']);

        foreach($processor->getNotLearnedWords() as $key => $word)
        {
            print $key . $word->toCheckbox() . "<b>" . $word . "</b>" . "&nbsp&nbsp&nbsp" . "<i>( " . $word->getContext() . ")</i>" . "<br>";
        }
        ?>
        <hr>
		<button id='btn_reset' onclick="resetCheckboxes()">Reset checkboxes</button>
        <button type="button" onclick="send()">send</button>
        <button type="button" onclick="deleteWord()">del</button>
        <button type="button" onclick="generateListOfOnlyWords()">list of only words</button>
        <hr>
        <div class="deleteFun">
            <input type='text' name='deleteWord' placeholder='Word for deleting' id='delete'>
            <label for='delete'>Click 'Send' and word will deleted.</label>
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
                    data: { checkboxes: ajaxData },
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
                    data: { deleteWord: deleteWords.val() },
                    dataType: 'text',
                    success: function (data) {
                        deleteWords.val("");
                        alert(data);
                    }
                })
            }

            function generateListOfOnlyWords() {
                let input = document.createElement('input')
                input.name = "words[]";

                let innerHTML = "";

                for (let i = 0; i < checkboxes.length; ++i) {
                    input.setAttribute("value", checkboxes[i].name)
                    innerHTML += input.outerHTML;
                }

                let form = document.createElement('form');
                form.action = 'listOfOnlyWords.php';
                form.method = 'POST';

                form.innerHTML = innerHTML;

                document.body.append(form);

                form.submit();
            }
		</script>
	</body>
 </html>
