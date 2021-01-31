<?php

require ('../classes/database.php');

use classes\database;

$text = $_POST['text'];

if ($text === "")
{
    echo "Field 'text' is empty!";
}
else
{
    $db = new database();

    echo $text;

    $db->addToHistory($text);
}