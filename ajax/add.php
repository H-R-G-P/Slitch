<?php
var_dump($_POST);

/*
 * Received data:
 * $_POST = [
 *      'checkboxes' => [
 *          0 => "word",
 *          1 => "word",
 *          2 => "word",
 *          ...
 *      ]
 * ]
 */

$mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
$mysqli->set_charset('utf8');

$query = "INSERT INTO words (word) values ('')";
foreach ($_POST['checkboxes'] as $value) $query .= ", ('$value')";
$mysqli->query($query);

$mysqli->query("DELETE from words WHERE word=''");

$mysqli->close();
