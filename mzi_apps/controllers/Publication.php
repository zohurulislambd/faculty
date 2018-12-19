<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/18/2018
 * Time: 11:48 AM
 * @property Publication_model  mPublication
 * @property CI_Upload upload
 * @property CI_Form_validation form_validation
 * @property CI_Form_validation  validation
 */

class Publication Extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Publication_model","mPublication");
        $this->load->library(array("Form_validation"=>"validation"));
    }

    public function all_publication(){
        $data= array(
            'post'=>$this->mPublication->get_publication()
        );
        master_view("backend/publication/publication",$data);
    }

    /**
     *
     */


    public function add_publication()
    {
        $datum = array('msg' => false);
        if (!empty($_POST)) {
            $this->validation->set_rules('title', 'Title', 'required');
            $this->validation->set_rules('author', 'Author', 'required');
            $this->validation->set_rules('type', 'Type', 'required');
            $this->validation->set_rules('book_info', 'Book Info', 'required');
            $this->validation->set_rules('sub_title', 'Sub Title', 'required');
            $this->validation->set_rules('description', 'description', 'required');

            $config =array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png',
            'overwrite' => TRUE,
            'max_size' => 1024,
            'max_width' => 800,
            'max_height' => 600,
            );

            $this->load->library('upload', $config);

            $field_name = "photo";
            $this->upload->do_upload($field_name);

            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
//            $this->load->view('upload_form', $error);
                $datum['msg'] = false;
                $datum['msg'] = $error;
            } else {
                $data = array('upload_data' => $this->upload->data());
//            $this->load->view('upload_success', $data);
                $datum['msg'] = false;
                $datum['msg'] = "Image was uploaded";
                $this->mPublication->add_publication();
                redirect("Publication/all_publication");
            }

        }
        master_view("backend/publication/add_publication");
    }



    public function edit_publication($id){
        if (is_submitted()){
            $this->mPublication->edit_publication($id);
            redirect("Publication/all_publication");
        }
        $data= array(
            'editable'=>$this->mPublication->get_single_publication($id)
        );
        master_view("backend/publication/edit_publication",$data);
    }

    public function del_publication($id){
        $this->mPublication->delete_publication("$id");
        redirect("Publication/all_publication");
    }


}