<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Put in text area text!</title>
</head>
<body>
<form method="POST" action="functions/handleWords.php">
    <label for="text">
        <b>Text</b>
    </label><br>
    <textarea name="text" id="text"></textarea><br>

	<input type="submit" value="handle words">
</form>
<hr>
<form method="post" action="functions/splitOn3Columns.php">
    <label for="listOfWords">
        <b>List of words</b>
    </label><br>
    <textarea name="listOfWords" id="listOfWords"></textarea><br>
    <label>
        How many words will be in 1 column?<br>
        <input type="number" name="sumWordsInCol" value="61">
    </label><br>

    <input type="submit" value="split">
</form>
<script>
    let textarea1 = document.getElementById('text')
    let textarea2 = document.getElementById('listOfWords')

    textarea1.value = "";
    textarea2.value = "";
</script>
</body>
</html>