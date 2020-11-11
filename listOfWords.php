 <!DOCTYPE html>
 <html lang="en">
	<head>
		<title>Slitch</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<script type="text/javascript">
			'use strict'

			let div_checkboxes = document.getElementById('div_checkboxes');

			function resetCheckboxes()
			{
				let size = div_checkboxes.childNodes.length;
				let checkboxes;
				for (let i = 1; i < size; i+=4) {
			        checkboxes = div_checkboxes.childNodes[i];
				    checkboxes.checked = false;
			    }
			}
		</script>
		<form method='POST' action='handler.php'>
			<div id="div_checkboxes">
            <?php
                require_once ('classes/processes.php');
                require_once ('classes/slitch.php');
                require_once ('classes/Checkboxes.php');

                use classes\slitch;
                use classes\Checkboxes;

                $receivedText = $_POST['textarea'];

                $slitch = new slitch($receivedText);
                $slitch->splitTextIntoWords();
                $slitch->setUniqReceivedWords();
                $slitch->setNotLearnedWords();

                $Checkboxes = new Checkboxes();
                $Checkboxes->echoIntoCheckboxes($slitch->getNotLearnedWords());
            ?>
			</div>
			<input type='submit' value='Send'>
            <div class="deleteFun">
                <input type='text' name='deleteWord' placeholder='Word for deleting' id='delete'>
                <label for='delete'>Click 'Send' and word will deleted.</label>
            </div>
		</form>
		<button id='btn_reset' onclick="resetCheckboxes()">Reset checkboxes</button>
	</body>
 </html>