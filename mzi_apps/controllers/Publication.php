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

            $config['upload_path'] = './uploads/publications/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config ['override'] = TRUE;
            $config['max_size'] = 1024;
            $config['max_width'] = 800;
            $config['max_height'] = 600;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
                $datum['msg'] = false;
                $datum['msg'] = $error;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $datum['msg'] = false;
                $datum['msg'] = "Image was uploaded";
                $this->mPublication->add_publication();
                redirect('Publication/all_publication');
            }
        }
        master_view('backend/publication/add_publication', $datum);
    }





    public function edit_publication($id){
        if (!empty($_POST)) {
            $this->validation->set_rules('title', 'Title', 'required');
            $this->validation->set_rules('author', 'Author', 'required');
            $this->validation->set_rules('type', 'Type', 'required');
            $this->validation->set_rules('book_info', 'Book Info', 'required');
            $this->validation->set_rules('sub_title', 'Sub Title', 'required');
            $this->validation->set_rules('description', 'description', 'required');
        }
            $config['upload_path'] = './uploads/publications/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config ['override'] = TRUE;
            $config['max_size'] = 1024;
            $config['max_width'] = 800;
            $config['max_height'] = 600;

            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            if ($this->upload->do_upload('photo')){
                if ($this->validation->run()){
                    $this->mPublication->edit_publication($id);
                    $data['message'] = "Publication info Update successful!!!";
                    redirect('Publication/all_publication');
                }else{
                    print_r($this->upload->display_errors());
                    return;
                }
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