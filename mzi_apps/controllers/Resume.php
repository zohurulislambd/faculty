<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 1/3/2019
 * Time: 3:20 PM
 * @property CI_Input input
 * @property Resume_model mResume
 * @property CI_Upload upload
 * @property CI_Form_validation validation
 * @property CI_Session session
 */

class Resume extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
            $this->load->model("Resume_model","mResume");
         $this->load->library(array("Form_validation"=>"validation"));
                if (!$this->session->userdata('is_logged')){
                    redirect('Authentication/login');    }
                }


    public function all_resume()
     {
        $data=array(
            'post'=> $this->mResume->get_cv()
        );
        master_view('backend/resume/resume',$data);
         }


/*    function file_download()
    {
        $file_name= $this->input->get('file_name');

        $this->load->helper('download');
        $data = file_get_contents($file_name);
        $name = 'My_new_name.pdf';

        force_download($name, $data);
    }*/
    public function add_resume(){
            $data["upload_error"]="";
            if (is_submitted()){
                $this->validation->set_rules('title','Resume title','required');
            }
            $config= array(
                'upload_path' => './uploads/',
                'allowed_types' => 'pdf|cvs|jpeg|png|jpg|gif|ppt|doc|docx',
                'max_size' => '1024',
                'max_width' => '1920',
                'max_height' => '1600',
                'encrypt_name' => false,
            );
            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if ($this->validation->run()){
                if ($this->upload->do_upload('resume_file')){
                    $data['massage']= "Portfolio added successful!!";
                }else{
                    $data['upload_error']=$this->upload->display_errors();
                }
                $this->mResume->save_resume();
                redirect("Resume/all_resume");
            }
            master_view("backend/resume/add-resume",$data);
        }
    public function edit_resume($id){
        $data["upload_error"]="";
        if (!empty($_POST)){
            $this->validation->set_rules('title','Resume title');
        }
        $config= array(
            'upload_path' => './uploads/',
            'allowed_types' => 'pdf|csv',
            'max_size' => '2048',
            'max_width' => '1920',
            'max_height' => '1600',
            'encrypt_name' => false,
        );
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('resume_file')){
            if ($this->validation->run()){
                $this->mResume->edit_resume_item($id);
                $data['massage']= "Portfolio Update successful!!";
                redirect("Resume/resume_all");
            }else{
                print_r($this->upload->display_errors());
                return;
            }
        }
        $data= array(
            'editable'=>$this->mResume->get_single_resume($id)
        );
        master_view("backend/resume/edit_resume",$data);
    }

    public function del_resume($id)
    {
        $this->mResume->del_resume_item($id);
        redirect("Resume/all_resume");
    }

}