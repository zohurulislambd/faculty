<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/26/2018
 * Time: 4:33 PM
 * @property Contact_model mContact
 * @property CI_Form_validation validation
 * @property CI_Input input
 *  @property CI_Session session
 */

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model','mContact');
        $this->load->library(array("form_validation" => "validation"));
        if (!$this->session->userdata('is_logged')){
            redirect('Authentication/login');
        }
    }
    public function contact_info(){
        $data = array(
            'post'=>$this->mContact->get_contact()
        );
        master_view("backend/contacts/contact",$data);
       /* $this->load->view('backend/common/header');
        $this->load->view('backend/common/sidebar');
       $this->load->view('backend/contacts/contact',$data);
        $this->load->view('backend/common/footer');*/
    }

    public function contact_us(){
        if (is_submitted()){
            $this->validation->set_rules('name','Name','required');
            $this->validation->set_rules('email','Email','required|valid_email', [
                "validation"=>"Why don\'t you fill the email field!",
                "required"=>"Your email address seems invalid!"
            ]);
            $this->validation->set_rules('phone','Phone','required');
            $this->validation->set_rules('subject','Subject');
            $this->validation->set_rules('message','Message');
            if ($this->validation->run()){
                $this->mContact->add_contact_info();
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function del_cont($id){
        $this->mContact->del_contact($id);
        redirect('Contact/contact_info');
    }

    /*============contact address section code start here============*/

    public function all_cont_add(){
        $data = [
            'post'=>$this->mContact->get_cont_add()
        ];
        master_view('backend/contacts/address',$data);
    }

    public function add_cont_address(){
        if (is_submitted()){
            $this->mContact->add_cont_add();
            redirect('Contact/all_cont_add');
        }
        master_view('backend/contacts/add_address');
    }
    public function edit_cont_add($id){
        if (is_submitted()){
            $this->mContact->edit_cont_add($id);
            redirect('Contact/all_cont_add');
        }
        $data = [
            'editable'=>$this->mContact->get_single_address_by_id($id)
        ];
        master_view('backend/contacts/edit_address',$data);
    }
    public function del_cont_add($id){
       $this->mContact->delete_cont_add($id);
        redirect('Contact/all_cont_add');
    }

}