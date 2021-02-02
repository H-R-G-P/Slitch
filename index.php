<?php
$mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset('utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Put in text area text!</title>
    <script src="http://localhost/libraries/jquery-3.5.1.js"></script>
    <style>
        #firstText {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: black;
        }
        #secondText {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: dimgrey;
        }
        #thirdText {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: darkgray;
        }
    </style>
</head>
<body>
<form method="POST" action="functions/handleWords.php">
    <label for="text">
        <b>Text</b>
    </label><br>
    <textarea name="text" id="text"></textarea><br>

	<input type="submit" value="handle words" onclick="addToHistory()">
</form>
<hr>
<div>
    <b>History of texts</b>
    <div style="margin-left: 30px;margin-top: 5px">
        <div id="firstText">
            <?php
            $result = $mysqli->query("select text from history where id=1");
            if ($result) {
                $array = $result->fetch_assoc();
                echo $array['text'];
            }
            else echo "Error. " . $mysqli->error;
            ?>
        </div>
        <button type="button" style="margin-top: 3px" onclick="selectFirstText()">select</button>
    </div>
    <div style="margin-left: 30px;margin-top: 5px">
        <div id="secondText">
            <?php
            $result = $mysqli->query("select text from history where id=2");
            if ($result) {
                $array = $result->fetch_assoc();
                echo $array['text'];
            }
            else echo "Error. " . $mysqli->error;
            ?>
        </div>
        <button type="button" style="margin-top: 3px" onclick="selectSecondText()">select</button>
    </div>
    <div style="margin-left: 30px;margin-top: 5px">
        <div id="thirdText">
            <?php
            $result = $mysqli->query("select text from history where id=3");
            if ($result) {
                $array = $result->fetch_assoc();
                echo $array['text'];
            }
            else echo "Error. " . $mysqli->error;
            ?>
        </div>
        <button type="button" style="margin-top: 3px" onclick="selectThirdText()">select</button>
    </div>
</div>
<hr>
<form method="post" action="functions/splitOn3Columns.php">
    <label for="listOfWords">
        <b>List of words</b>
    </label><br>
    <textarea name="listOfWords" id="listOfWords"></textarea><br>
    <label>
        How many words will be in 1 column?<br>
        <input type="number" name="sumWordsInCol" value="93">
    </label><br>

    <input type="submit" value="split">
</form>
<script>
    let textarea1 = document.getElementById('text')
    let textarea2 = document.getElementById('listOfWords')

    textarea1.value = "";
    textarea2.value = "";

    function addToHistory() {
        let ajaxData = textarea1.value;

        $.ajax({
            url: 'ajax/addToHistory.php',
            type: 'POST',
            cache: false,
            data: {text : ajaxData},
            dataType: 'text',
            success: function (data) {
                if (data !== '') {
                    let message = "This text doesn't saved in history.\n"  + data;
                    alert(message);
                }
            }
        })
    }

    function selectFirstText() {
        let text = document.getElementById('firstText');
        textarea1.value = text.innerText;
    }

    function selectSecondText() {
        let text = document.getElementById('secondText');
        textarea1.value = text.innerText;
    }

    function selectThirdText() {
        let text = document.getElementById('thirdText');
        textarea1.value = text.innerText;
    }
</script>
</body>
</html>
<?php
$mysqli->close();
?>