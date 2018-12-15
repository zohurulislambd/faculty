<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/23/2018
 * Time: 3:53 PM
 * @property CI_Form_validation validation
 * @property CI_Upload upload
 * @property Project_model mProject
 */

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Project_model","mProject");
        $this->load->library(["Form_validation"=>"validation"]);
        if (!$this->session->userdata('is_logged')){
            redirect('Authentication/login');
        }
    }

    public function add_project(){
        $data["upload_error"]="";
        if (is_submitted()){
            $this->validation->set_rules('project_name','Project title','required');
            $this->validation->set_rules('project_link','Project link');
            $this->validation->set_rules('short_desc','short desc');
        }
        $config= array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => '800',
            'max_width' => '600',
            'max_height' => '400',
            'encrypt_name' => true,
        );
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if ($this->validation->run()){
            if ($this->upload->do_upload('project_feature')){
                $data['massage']= "Portfolio added successful!!";
            }else{
                $data['upload_error']=$this->upload->display_errors();
            }
            $this->mProject->save_project();
            redirect("Project/all_project");
        }
        master_view("backend/project/add_project",$data);
    }

public function all_project(){
    $data = array(
            'projects'=>$this->mProject->get_project()
        );
    master_view("backend/project/project-all",$data);
}

public function edit_project($id){
    $data["upload_error"]="";
    if (is_submitted()){
        $this->validation->set_rules('project_name','Project title','required');
        $this->validation->set_rules('project_link','Project link');
        $this->validation->set_rules('short_desc','short desc');
    }
    $config= array(
        'upload_path' => './uploads/',
        'allowed_types' => 'gif|jpg|jpeg|png',
        'max_size' => '800',
        'max_width' => '600',
        'max_height' => '400',
        'encrypt_name' => true,
    );
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('project_feature')){
        if ($this->validation->run()){
            $this->mProject->edit_project($id);
            $data['massage']= "Portfolio Update successful!!";
            redirect("Project/all_project");
        }else{
            print_r($this->upload->display_errors());
            return;
        }

    }
    $data= array(
        'editable'=>$this->mProject->get_single_pro($id)
    );
    master_view("backend/project/edit_project",$data);
}


public function del_project($id){
    $this->mProject->del_pro($id);
    redirect("Project/all_project");
}

}