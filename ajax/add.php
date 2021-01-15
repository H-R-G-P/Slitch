<?php


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
$result = $mysqli->query($query);
if ($result) echo "Success add words. \n";
else echo "Words not added to database.";

$result = $mysqli->query("DELETE from words WHERE word=''");
if ($result) echo "Success additional query.";
else echo "Additional query to database wasn't success.";

$mysqli->close();
