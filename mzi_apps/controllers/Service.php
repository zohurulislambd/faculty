<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/26/2018
 * Time: 2:31 PM
 * @property Service_model mService
 * @property  CI_Session session
 */

class Service extends CI_Controller
{
public function __construct()
{
    parent::__construct();
    $this->load->model('Service_model','mService');
// session setup
    if (!$this->session->userdata('is_logged')){
        redirect('Authentication/login');
    }
}
    public function service_cont(){
        $data= array(
            'post'=>$this->mService->get_services()
        );
        master_view("backend/service/service",$data);
    }

    public function add_service(){
        if (is_submitted()){
            $this->mService->add_services();
            redirect("Service/service_cont");
        }
        master_view("backend/service/add_service");
    }

    public function edit_service($id){
        if (is_submitted()){
            $this->mService->edit_services($id);
            redirect("Service/service_cont");
        }
        $data= array(
            'editable'=>$this->mService->get_single_services($id)
        );
        master_view("backend/service/edit_service",$data);
    }

    public function delete_service($id){
        $this->mService->delete_service("$id");
        redirect("Service/service_cont");
    }



}