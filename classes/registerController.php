<?php 

class RegisterController{

    public function __construct(){
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function registration($username, $email, $pass){
        $register_query = "INSERT INTO users (username,email,pass) VALUES ('$username', '$email', '$pass')";
        $result = $this->conn->query($register_query);
        return $result;
    }

    public function isUserExists($email){
        $checkUser = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $result    = $this->conn->query($checkUser);
        if( $result->num_rows > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function confirmPass($pass,$re_pass){
        if( $pass == $re_pass ){
            return true;
        }
        else{
            return false;
        }
    }

}