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

	<input id="btnSubmitForHandleWords" type="submit" value="handle words" onclick="checkLang(), addToHistory()">
    <label for="selectLang">Select language:</label>
	<select name="lang" id="selectLang">
        <option value="NULL">Not selected</option>
        <option value="EN">EN</option>
        <option value="PL">PL</option>
    </select>
    <button type="button" onclick="cleanTextarea1(), resetLang()">Clean textarea</button>
</form>
<hr>
<div>
    <b>History of texts</b>
    <div style="margin-left: 30px;margin-top: 5px">
        <div id="firstText">
            <?php
            $query = "select preview from history h inner JOIN texts t on h.id_texts = t.id where h.position=1";
            $result = $mysqli->query($query);
            if ($result) {
                $array = $result->fetch_assoc();
                echo $array['preview'];
            }
            else echo "Error. " . $mysqli->error;
            ?>
        </div>
        <button type="button" style="margin-top: 3px" onclick="selectTextFromHistory(1), resetLang()">select</button>
    </div>
    <div style="margin-left: 30px;margin-top: 5px">
        <div id="secondText">
            <?php
            $query = "select preview from history h inner JOIN texts t on h.id_texts = t.id where h.position=2";
            $result = $mysqli->query($query);
            if ($result) {
                $array = $result->fetch_assoc();
                echo $array['preview'];
            }
            else echo "Error. " . $mysqli->error;
            ?>
        </div>
        <button type="button" style="margin-top: 3px" onclick="selectTextFromHistory(2), resetLang()">select</button>
    </div>
    <div style="margin-left: 30px;margin-top: 5px">
        <div id="thirdText">
            <?php
            $query = "select preview from history h inner JOIN texts t on h.id_texts = t.id where h.position=3";
            $result = $mysqli->query($query);
            if ($result) {
                $array = $result->fetch_assoc();
                echo $array['preview'];
            }
            else echo "Error. " . $mysqli->error;
            ?>
        </div>
        <button type="button" style="margin-top: 3px" onclick="selectTextFromHistory(3), resetLang()">select</button>
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
        <input type="number" name="sumWordsInCol" value="94">
    </label><br>

    <input type="submit" value="split">
</form>
<script>
    let selectLang = document.getElementById('selectLang');
    let textarea1 = document.getElementById('text')
    let textarea2 = document.getElementById('listOfWords')

    selectLang.addEventListener('click', checkLang)

    cleanTextarea1();
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

    function checkLang() {
        let btn = document.getElementById('btnSubmitForHandleWords');

        btn.disabled = selectLang.value === 'NULL';
    }

    function resetLang() {
        selectLang.value = 'NULL';
    }

    function cleanTextarea1() {
        textarea1.value = "";
    }

    function selectTextFromHistory(position) {
        $.ajax({
            url: 'ajax/selectTextFromHistory.php',
            type: 'POST',
            cache: false,
            data: {position : position},
            dataType: 'text',
            success: function (data) {
                textarea1.value = data;
            }
        })
    }
</script>
</body>
</html>
<?php
$mysqli->close();
?>