<?php 

class LoginController{

    public function __construct(){
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function userLogin( $email,$pass ){

        $checkLogin = "SELECT * FROM users WHERE email='$email' AND pass='$pass' LIMIT 1";
        $result     = $this->conn->query($checkLogin);
        if( $result->num_rows > 0){
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }
        else{
            return false;
        }

    }

    private function userAuthentication($data){
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_user'] = [
            'user_id'       => $data['id'],
            'user_username' => $data['username'],
            'user_email'    => $data['email'],
        ];
    }

    public function isLoggedIn(){
        if(isset($_SESSION['authenticated']) === TRUE){
            redirect("You are logged in", "admin/index.php");
        }
        else{
            return false;
        }
    }

    // public function logout(){
    //     if(isset($_SESSION['authenticated']) === TRUE){
    //         unset($_SESSION['authenticated']);
    //         unset($_SESSION['auth_user']);
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

}