<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/23/2018
 * Time: 3:53 PM
 * @property CI_Form_validation validation
 * @property CI_Upload upload
 * @property Gallery_model mGallery
 * @property CI_Session session
 */

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Gallery_model","mGallery");
        $this->load->library(array("Form_validation"=>"validation"));
        if (!$this->session->userdata('is_logged')){
            redirect('Authentication/login');
        }
    }

    public function all_gallery(){
        $data = array(
            'gallery'=>$this->mGallery->get_gallery()
        );
        master_view("backend/gallery/gallery_all",$data);
    }

    public function add_gallery(){
        $data["upload_error"]="";
        if (is_submitted()){
            $this->validation->set_rules('title','Gallery title','required');
            $this->validation->set_rules('project_link','Gallery link');
            $this->validation->set_rules('short_description','short desc');
        }
        $config= array(
            'upload_path' => './uploads/gallery/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => '1024',
            'max_width' => '1920',
            'max_height' => '1600',
            'encrypt_name' => true,
        );
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if ($this->validation->run()){
            if ($this->upload->do_upload('gallery_feature')){
                $data['massage']= "Portfolio added successful!!";
            }else{
                $data['upload_error']=$this->upload->display_errors();
            }
            $this->mGallery->save_gallery();
            redirect("Gallery/all_gallery");
        }
        master_view("backend/gallery/add_gallery",$data);
    }

    public function edit_gallery($id){
        $data["upload_error"]="";
        if (is_submitted()){
            $this->validation->set_rules('title','Photo title','required');
            $this->validation->set_rules('project_link','Project link');
            $this->validation->set_rules('short_description','short description');
        }
        $config= array(
            'upload_path' => './uploads/gallery/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => '1024',
            'max_width' => '1920',
            'max_height' => '1600',
            'encrypt_name' => true,
        );
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gallery_feature')){
            if ($this->validation->run()){
                $this->mGallery->edit_gallery_item($id);
                $data['massage']= "Portfolio Update successful!!";
                redirect("Gallery/all_gallery");
            }else{
                print_r($this->upload->display_errors());
                return;
            }

        }
        $data= array(
            'editable'=>$this->mGallery->get_single_pro($id)
        );
        master_view("backend/gallery/edit_gallery",$data);
    }

public function del_gallery($id){
    $this->mGallery->del_gallery_item($id);
    redirect("Gallery/all_gallery");
}

}