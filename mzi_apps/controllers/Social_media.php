<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/26/2018
 * Time: 4:44 PM
 * @property  Social_media_model mSocial
 * @property CI_Form_validation validation
 */

class Social_media extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Social_media_model","mSocial");
}

    /*==========socail media section start=========*/

    public function get_socail_link(){
        $data =  array(
            'post'=> $this->mSocial->get_socail_media_all()
        );
        master_view('backend/social-media/all_socail_media',$data);
    }

    public function add_socail_media_link(){
        if (is_submitted()){
            $this->validation->set_rules('class_name','Front Awesome class name','required');
            $this->validation->set_rules('link','url link','required');
            $this->mSocial->add_socail_media();
            redirect('Social_media/get_socail_link');
        }
        master_view('backend/social-media/add_socail_media');
    }

    public function edit_socail_media_link($id){
        if (is_submitted()){
            $this->mSocial->edit_socail_media($id);
            redirect('Social_media/get_socail_link');
        }
        $data= array(
            'editable'=>$this->mSocial->get_single_socail_media($id)
        );
        master_view('backend/social-media/edit_socail_media',$data);
    }

    public function del_socail_media($id){
        $this->mSocial->delete_socail($id);
        redirect('Social_media/get_socail_link');
    }





}

