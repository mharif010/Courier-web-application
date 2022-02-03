<?php
include_once('session.php');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'courier_db');

include_once('database.php');

$db = new dbConnection;

function validateInput($dbCon, $input){
    return mysqli_real_escape_string($dbCon, $input);
}