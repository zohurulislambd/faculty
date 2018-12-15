<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/11/2018
 * Time: 5:08 PM
 * @property CI_Session session
 * @property Research_model mResearch
 * @property   CI_Upload upload
 * @property CI_Form_validation validation
 * @property CI_Input  input
 */

class Research extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Research_model","mResearch");
        $this->load->library(array("Form_validation" => "validation"));
        if (!$this->session->userdata('is_logged')){

            redirect('Authentication/login');
        }
    }

    /*
     * ========================================================
     *  Research area
     *
     * ======================================
     * */


    public function all_research()
    {
      $data = array(
        'records' => $this->mResearch->get_all_research_project()
      );
        master_view('backend/research/research-list',$data);
    }

    public function add_research_item()
    {
        $message["uploads_error"] = "";
        if (!empty($_POST)){
            $this->validation->set_rules('title','Project Title','required');
            $this->validation->set_rules('sub_title','Project sub Title');
            $this->validation->set_rules('project_full_descrip','Project Description');

            $config= array(
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|jpeg|png',
                'max_size' => '1024',
                'max_width' => '800',
                'max_height' => '600',
                'encrypt_name' => true,
            );

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if ($this->validation->run()){
                if ($this->upload->do_upload('project_image')){
                    $message['massage']= "Project image added successful!!";
                }else{
                    $message['upload_error']=$this->upload->display_errors();
                }
                $this->mResearch->add_research_project();
                redirect('Research/all_research');
            }

        }
        master_view('backend/research/add-research',$message);
    }

    /*
     * update or Edit research information
     * */

    public function eid_research_item($id)
    {
        $message["uploads_error"] = "";
        if (!empty($_POST)){
            $this->validation->set_rules('title', 'Project Title', 'required');
            $this->validation->set_rules('sub_title', 'Project sub Title', 'required');
            $this->validation->set_rules('project_full_descrip', 'Project Description', 'required');
        }
            $config= array(
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|jpeg|png',
                'max_size' => '1024',
                'max_width' => '800',
                'max_height' => '600',
                'encrypt_name' => true,
            );

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('project_image')){
                if ($this->validation->run()){
                    $this->mResearch->edit_research_project($id);
                    $data['message'] = "Research info Update successful!!!";
                    redirect('Research/all_research');
                }else{
                    print_r($this->upload->display_errors());
                    return;
                }
            }
            $data =array(
                'editable'=> $this->mResearch->get_single_research_project($id)
            );
            master_view('backend/research/edit-research',$data);

    }

    public function del_research($id)
    {
        $this->mResearch->del_research_project($id);
        redirect('Research/all_research');
    }
/*==============================
 * Interest adrea srat
 * ==============================*/

    public function all_interest()
    {
       $data = array(
           'records'=>$this->mResearch->get_all_interest()
       );
       master_view('backend/research/interest-list',$data);
       
    }
    public function add_interest()
    {
        if (is_submitted()){
          $this->mResearch->add_interest_cont();
            redirect('Research/all_interest');
        }
        master_view('backend/research/add-interest');
    }


    public function eid_interest($id)
    {
        if (is_submitted()){
            $this->mResearch->edit_interest_cont($id);
            redirect('Research/all_interest');
        }
        $data = array(
            'editable'=>$this->mResearch->get_single_interest($id)
        );
        master_view('backend/research/edit-interest',$data);
    }

    public function del_interest($id)
    {
        $this->mResearch->del_interest_cont($id);
        redirect('Research/all_interest');
    }






}