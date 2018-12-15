<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/20/2018
 * Time: 3:58 PM
 * @property Bio_model mBio
 * @property CI_Form_validation validation
 * @property CI_Input input
 * @property CI_Upload upload
 * @property CI_Session  session
 */

class Biodata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Bio_model","mBio");
        $this->load->library(array("Form_validation"=>"validation"));
        if (!$this->session->userdata('is_logged')){
            redirect('Authentication/login');
        }
    }

    public function bio_cont(){
        $data = array(
          'post'=>$this->mBio->get_bio()
        );
        master_view("backend/biodata/biodata",$data);
    }
public function add_edu(){
   if (is_submitted()){
       $this->mBio->add_edu_bio();
       redirect("Biodata/bio_cont");
   }
    master_view("backend/biodata/add_edu");
}

    public function edit_edu($id){
        if(!empty($_POST)){
            $this->mBio->edit_edu_bio($id);
            redirect("Biodata/bio_cont");
        }
        $data= array(
            'editable'=>$this->mBio->get_single_info($id)
        );
        master_view("backend/biodata/edit_edu",$data);
    }

    public function delete_edu($id){
        $this->mBio->edu_del("$id");
        redirect("Biodata/bio_cont");
    }

    /*
     * Employment / Academic position section start
     */
    public function eployment_cont(){
        $data= array(
            'post'=>$this->mBio->get_employment()
        );
        master_view("backend/biodata/employment",$data);
    }

    public function add_emp(){
        if (is_submitted()){
            $this->mBio->add_employment();
            redirect("Biodata/eployment_cont");
        }
        master_view("backend/biodata/add_emp");
    }

    public function edit_emp($id){
        if (is_submitted()){
            $this->mBio->edit_employment($id);
            redirect("Biodata/eployment_cont");
        }
        $data= array(
            'editable'=>$this->mBio->get_single_employment($id)
        );
        master_view("backend/biodata/edit_emp",$data);
    }
    public function delete_emp($id){
        $this->mBio->delete_emp("$id");
        redirect("Biodata/eployment_cont");
    }

    /* end employeement section
     * */

    /* ========================================
     * start awards section
     *
     *
     *  ======================================*/

    public function award_list()
    {
        $data = array(
            'records'=> $this->mBio->get_award()
        );
        master_view('backend/biodata/awards-list',$data);

        }

    public function add_award_list(){
        $message["upload_error"]="";
        if (is_submitted()){
            $this->validation->set_rules('aw_short_name','Project title','required');
            $this->validation->set_rules('aw_full_name','Project link');
            $this->validation->set_rules('aw_full_name','short desc');
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

        if ($this->validation->run()){
            if ($this->upload->do_upload('aw_image')){
                $message['massage']= "Awards image added successful!!";
            }else{
                $message['upload_error']=$this->upload->display_errors();
            }
            $this->mBio->add_award();
            redirect('Biodata/award_list');
        }
        master_view('backend/biodata/add-award',$message);

    }

    /*
     *
     * Edit / Update information
     *
     * */

    public function aw_edit($id){
        $data["upload_error"]="";
        if (is_submitted()){
            $this->validation->set_rules('aw_short_name','aw_short title','required');
            $this->validation->set_rules('aw_full_name','Project link');
            $this->validation->set_rules('aw_description','short desc');
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

        if ($this->upload->do_upload('aw_image')){
            if ($this->validation->run()){
                $this->mBio->edit_award($id);
                $data['message']= "Portfolio Update successful!!";
                redirect('Biodata/award_list');
            }else{
                print_r($this->upload->display_errors());
                return;
            }

        }
        $data= array(
            'editable'=>$this->mBio->get_single_award($id)
        );
        master_view("backend/biodata/awards_edit", $data);
    }

    /*
     * delete
     * */
    public function aw_del($id)
    {
        $this->mBio->del_award($id);
        redirect('Biodata/award_list');
    }




}