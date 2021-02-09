<?php

require_once '../classes/database.php';

use classes\database;

/*
 * Received data:
 * $_POST = [
 *      'checkboxes' => [
 *          0 => "word",
 *          1 => "word",
 *          2 => "word",
 *          ...
 *      ],
 *      'lang' => "EN"
 * ]
 */

$db = new database();

$response = $db->addWords($_POST['checkboxes'], $_POST['lang']);

echo $response;