<?php
/**
 * Created by PhpStorm.
 * User: TKH_2(WEB)
 * Date: 6/28/2018
 * Time: 12:22 PM
 * @property CI_Session  session
 */

class Admin extends CI_Controller
{
    //domain/controlaer_name/method
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_logged')){
            redirect("authentication/login");
        }

    }

    public function index(){
       master_view('backend/main');
    }
}
