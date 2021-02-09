<?php

require_once '../classes/database.php';

use classes\database;

/*
 * Received data:
 * $_POST = [
 *      'deleteWord' => "word",
 *      'lang' => "EN"
 * ]
 */

$db = new database();

$response = $db->deleteWord($_POST['deleteWord'], $_POST['lang']);

echo $response;