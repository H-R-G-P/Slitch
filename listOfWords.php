 <!DOCTYPE html>
 <html lang="en">
	<head>
		<title>Slitch</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<form method='POST' action='handler.php'>
			<div id="div_checkboxes">
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
			</div>
			<input type='submit' value='Send'>
            <div class="deleteFun">
                <input type='text' name='deleteWord' placeholder='Word for deleting' id='delete'>
                <label for='delete'>Click 'Send' and word will deleted.</label>
            </div>
		</form>
		<button id='btn_reset' onclick="resetCheckboxes()">Reset checkboxes</button>
        <script type="text/javascript">
			'use strict'

			let div_checkboxes = document.getElementById('div_checkboxes');

			function resetCheckboxes()
			{
			    let checkboxes = $('.checkbox');
				for (let i = 0; i < checkboxes.length; ++i) {
				    checkboxes[i].checked = false;
                }
			}

			function send() {
                let re = $('.checkbox');

                $.ajax({
                    url: 'handler.php',
                    type: 'POST',
                    cache: false,
                    data: {  },
                    dataType: 'text',
                    success: function (data) {
                        alert(data);
                    }
                })
            }
		</script>
	</body>
 </html>