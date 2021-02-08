<?php


/*
 * Received data:
 * $_POST = [
 *      'deleteWord' => "word"
 * ]
 */

$mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
$mysqli->set_charset('utf8');

$result = $mysqli->query("DELETE from EN_words WHERE word='{$_POST['deleteWord']}'");
if ($result) echo "Success deleted.";
else echo "Not deleted from database.";

$mysqli->close();
