<?php

include_once('/xampp/htdocs/courier/classes/registerController.php');
include_once('/xampp/htdocs/courier/classes/loginController.php');

$auth = new LoginController;

if( isset($_POST['logout_btn']) ){
    $checkedlogout = $auth->logout();
    if($checkedlogout){
        redirect("Logout successfully", "courier/login.php");
    }
}

if( isset($_POST['login_btn']) ){

    $email = validateInput($db->conn, $_POST['email']);
    $pass = validateInput($db->conn, $_POST['pass']);
    
    $checkLogin = $auth->userLogin($email,$pass);
    if($checkLogin){
        redirect("Logged in successfully","admin/index.php");
    }
    else{
        redirect("Invalid Email or pass", "login.php");
    }

}

if( isset($_POST['register_btn']) ){

    $username = validateInput($db->conn, $_POST['username']);
    $email = validateInput($db->conn, $_POST['email']);
    $pass = validateInput($db->conn, $_POST['pass']);
    $rePass = validateInput($db->conn, $_POST['rePass']);

    $register = new RegisterController;
    $result_pass = $register->confirmPass($pass, $rePass);
    if($result_pass){
        $result_user = $register->isUserExists($email);
        if($result_user){
            redirect("Already user email exist", "register.php");
        }
        else{
            $register_query = $register->registration($username,$email,$pass);
            if($register_query){
                redirect("Registration succesfully", "login.php");
            }
            else{
                redirect("Something went wrong", "register.php");
            }
        }
    }
    else{
        redirect("Password does not match", "register.php");
    }

}