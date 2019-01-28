<?php
/**
 * Created by PhpStorm.
 * User: TKH_2(WEB)
 * Date: 6/30/2018
 * Time: 4:29 PM
 * @property Logo_model  mLogo
 * @property CI_Upload  upload
 * @property CI_Form_validation validation
 * @property  CI_Session session
 */

class Logo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Logo_model","mLogo");
        $this->load->library(array('form_validation'=> 'validation'));
        if (!$this->session->userdata('is_logged')){
            redirect('Authentication/login');
        }
    }
    public function logo_list(){
        $data = array(
            'post' =>$this->mLogo->all_logo()
        );
        master_view('backend/logo/logo_list', $data);
    }

public function change_logo($id)
{
    if (!empty($_POST)) {
        $this->validation->set_rules('logo_title', 'Logo title', 'required');
        $this->validation->set_rules('slogan', 'Slogan ', 'required');
    }
    if (!$this->session->userdata("is_logged")) {
        redirect('Logo/logo_list');
    }
    $data["upload_error"] = "";
    if (!empty($_POST)) {
        $this->validation->set_rules('logo_title', 'Logo title', 'required');
        $this->validation->set_rules('slogan', 'Slogan ', 'required');

        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "jpg|jpeg|png|gif",
            "max_size" => 1024,
            "max_height" => 600,
            "max_width" => 800,
            'encrypt_name' => true
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!empty($_FILES['image']['name'])) {
            if ($this->upload->do_upload('image')) {

                if ($this->validation->run()) {
                    $this->mLogo->edit_logo($id);
                    $data['message'] = "project update successfully!";
                    redirect('Logo/logo_list');
                }
            } else {
                print_r($this->upload->display_errors());
                return;
            }
        } else {
            $logo_info = $this->mLogo->get_single_logo($id);
            if ($this->validation->run()) {
                $this->mLogo->edit_logo($id, $logo_info->image);
                $data['message'] = "project update successfully!";
                redirect('Logo/logo_list');
            }
        }
    }
    $data = array(
        //'post'=> $this->mLogo->get_logo(),
        'post' =>$this->mLogo->all_logo(),
        'editable' =>$this->mLogo->get_single_logo($id)
    );
    master_view('backend/logo/edit_logo',$data);
}


    public function del_logo($id){
        $this->mLogo->delete_logo_list($id);
        redirect("Logo/logo_list");
    }


}