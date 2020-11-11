<?php
echo "<h1 style='margin-left: 45%'>Go back</h1>";

$mysqli = new mysqli("localhost", "slitch", "slitch-psw", "slitch");
$mysqli->set_charset('utf8');

$query = "INSERT INTO words values ('')";
foreach ($_POST as $key => $value) if ($value == "on") $query .= ", ('$key')";
$mysqli->query($query);

if ($_POST['deleteWord'] != '') $mysqli->query("DELETE from words WHERE word='$_POST[deleteWord]'");
$mysqli->query("DELETE from words WHERE word='';");

$mysqli->close();
