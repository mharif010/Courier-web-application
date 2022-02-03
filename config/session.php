<?php
session_start();

define('SITE_URL', 'http://localhost:8080/courier/');

function redirect( $message, $page ){
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("Location: $redirectTo");
    exit(0);
}