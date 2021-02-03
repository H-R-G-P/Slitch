<?php

use classes\database;

require_once ('../classes/database.php');

$db = new database();

$position = $_POST['position'];

echo $db->getTextOnPosition($position);