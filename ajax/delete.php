<?php
var_dump($_POST);

/*
 * Received data:
 * $_POST = [
 *      'deleteWord' => "word"
 * ]
 */

$mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
$mysqli->set_charset('utf8');

$mysqli->query("DELETE from words WHERE word='{$_POST['deleteWord']}'");

$mysqli->close();
