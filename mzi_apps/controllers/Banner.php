<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 7/31/2018
 * Time: 12:11 AM
 * @property Banner_model  mBanner
 * @property CI_Form_validation  validation
 * @property  CI_Session session
 */

class Banner extends CI_Controller
{
    /**
     * Banner_cont constructor.
     */
    public function __construct()
{
    parent::__construct();
    $this->load->model("Banner_model","mBanner");
    $this->load->library(array('form_validation'=> 'validation'));
    if (!$this->session->userdata('is_logged')){
        redirect('Authentication/login');
    }
}
public function banner_cont(){
        $data = array(
            'post'=>$this->mBanner->get_bnr_cont()
        );
        master_view('backend/banner/bnr_cont',$data);
}

public function change_bnr_cont($id){
    if (!empty($_POST)){
        $this->mBanner->edit_bnr_cont("$id");
      /*
           // form validation code
      $this->validation->set_rules('title','Title','required');
        $this->validation->set_rules('sub_title','Subtitle','required');
        $this->validation->set_rules('body','Body','required');*/
        redirect('Banner/banner_cont');
    }
    $data = array(
        'editable'=>$this->mBanner->get_single_post("$id")
    );

    master_view('backend/banner/edit_cont',$data);
}












}




