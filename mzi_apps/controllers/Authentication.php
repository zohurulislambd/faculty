<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 18/09/29
 * Time: 12:51 PM
 * @property  CI_Input input
 * @property CI_Form_validation  validation
 * @property Auth_model  mAuth
 * @property  CI_Session session
 */

class Authentication extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Auth_model","mAuth");
        $this->load->library(["Form_validation"=>"validation"]);
        $this->load->library('session');

    }

    public function login(){
        $message['error'] = "";
        if (form_submit()){
            $this->validation->set_rules('email','email', 'required');
            $this->validation->set_rules('password','password', 'required');
        if ($this->validation->run()){
             $username =  $this->input->post("email");
           $password =  $this->input->post("password");
           $userData = $this->mAuth->get_user_by_username($username);
          if ($userData != null && $userData->password == $password){
              $this->session->set_userdata('is_logged',true);
              $this->session->set_userdata('auth_user',$userData);
              redirect("Admin");
           }else{
               $message['error'] = "<div class=\"alert alert-danger alert-dismissible\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    <strong>Warning! </strong>Invalid Email Or Password!!!.
  </div>";
           }

        }
        }
     $this->load->view('backend/auth/login', $message);

    }

    public function logout()
    {
        $this->session->unset_userdata("is_logged");
        $this->session->unset_userdata("auth_user");
        redirect("authentication/login");
    }


}