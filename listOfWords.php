 <!DOCTYPE html>
 <html lang="en">
	<head>
		<title>Slitch</title>
		<meta charset='utf-8'>
        <script src="http://localhost/libraries/jquery-3.5.1.js"></script>
	</head>
	<body>
        <?php
        require_once('classes/word.php');
        require_once('classes/Processor.php');

        use classes\Processor;

        $processor = new Processor($_POST['textarea']);

        foreach($processor->getNotLearnedWords() as $key => $word)
        {
            print $key . $word->toCheckbox() . "<b>" . $word . "</b>" . "&nbsp&nbsp&nbsp" . "<i>(" . $word->getContext() . ")</i>" . "<br>";
        }
        ?>
        <hr>
		<button id='btn_reset' onclick="resetCheckboxes()">Reset checkboxes</button>
        <button type="button" onclick="send()">send</button>
        <button type="button" onclick="deleteWord()">del</button>
        <hr>
        <div class="deleteFun">
            <input type='text' name='deleteWord' placeholder='Word for deleting' id='delete'>
            <label for='delete'>Click 'Send' and word will deleted.</label>
        </div>
        <hr>
        <div id="response"></div>
        <script type="text/javascript">
			'use strict'

            let checkboxes = $('.checkbox');
            let deleteWords = $('#delete');

			function resetCheckboxes()
			{
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
                    url: 'ajax/add.php',
                    type: 'POST',
                    cache: false,
                    data: { checkboxes: ajaxData },
                    dataType: 'text',
                    success: function (data) {
                        $('#response').html(data);
                    }
                })
            }

            function deleteWord() {

                $.ajax({
                    url: 'ajax/delete.php',
                    type: 'POST',
                    cache: false,
                    data: { deleteWord: deleteWords.val() },
                    dataType: 'text',
                    success: function (data) {
                        deleteWords.val("");
                        $('#response').html(data);
                    }
                })
            }
		</script>
	</body>
 </html>
