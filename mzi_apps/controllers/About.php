<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 8/16/2018
 * Time: 11:34 PM
 * @property About_model mAbout
 * @property CI_Form_validation validation
 * @property  CI_Upload upload
 * @property CI_Session  session
 * @property CI_Input input
 */

class About extends CI_Controller
{

    /**
     * About constructor.
     */
    public function __construct()
        {
            parent::__construct();
            $this->load->library(["Form_validation"=>"validation"]);
            $this->load->model("About_model","mAbout");
            $this->load->helper('download');
            if (!$this->session->userdata('is_logged')){
                redirect('Authentication/login');
            }


        }
    public function about_cont (){
       $data = array(
          'post'=>$this->mAbout->get_about_cont()
        );
       master_view('backend/about/about_cont',$data);
        }

    public function change_about_cont($id){
        $data["upload_error"]="";


        if(is_submitted()){
          $this->validation->set_rules('head_title','Heading title','required');
          $this->validation->set_rules('title','title','required');
          $this->validation->set_rules('main_cont','main content','required');
          $this->validation->set_rules('skill_title','skill title','required');
          $this->validation->set_rules('skill_tag','skill tag','required');
          $this->validation->set_rules('fig_title','figuger title ','required');
          $this->validation->set_rules('fig_subtitle','figuger sub title ','required');
       /* $data = array(
                'head_title'=>$_POST['head_title'],
                'title'=>$_POST['title'],
                'main_cont'=>$_POST['main_cont'],
                'skill_title'=>$_POST['skill_title'],
                'skill_tag'=>$_POST['skill_tag'],
                'fig_title'=>$_POST['fig_title'],
                'fig_subtitle'=>$_POST['fig_subtitle']
            );*/

        }
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types'=> "jpg|jpeg|png|gif",
            "max_size" => 500,
            "max_height" => 1200,
            "max_width" => 1600,
            "encrypt_name" => true,
        );
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('my_feature')){
            if ($this->validation->run()){
                $this->mAbout->edit_about_cont($id);
                $data['massage']= "About feature Update successful!!";
                redirect("About/about_cont");
            }else{
                print_r($this->upload->display_errors());
                return;
            }
        }
        $data = array(
            'editable'=>$this->mAbout->get_singel_post("$id")
        );
        master_view('backend/about/edit_about',$data);
        /*$this->load->view('backend/common/header');
        $this->load->view('backend/about/edit_about',$data);
        $this->load->view('backend/common/footer',$data);*/
       }

       /*skills section start*/

       public function personal_skill(){
           $data=array(
               'post'=>$this->mAbout->get_skill()
           );
           master_view('backend/about/skill',$data);

       }
       public function add_per_skill(){
           if (!empty($_POST)){
               $this->mAbout->add_skill();
               redirect("About/personal_skill");
           }
           master_view('backend/about/add_skill');
       }
       public function edit_skill($id){
           if (!empty($_POST)) {
               $this->mAbout->edit_skill($id);
               redirect("About/personal_skill");
           }
           $data = array(
               'editable' => $this->mAbout->get_single_skill("$id")
           );

           master_view('backend/about/edit_skill',$data);
       }

        public function delete_skill($id)
        {
            $this->mAbout->delete($id);
            redirect("About/personal_skill");
        }





}