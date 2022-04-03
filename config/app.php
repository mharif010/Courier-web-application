<?php
session_start();

define('SITE_URL', 'http://localhost:8080/');

function redirect( $message, $page ){
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("Location: $redirectTo");
    exit(0);
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'courier_db');

include_once('database.php');

$db = new dbConnection;

function validateInput($dbCon, $input){
    return mysqli_real_escape_string($dbCon, $input);
}