<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/15/2018
 * Time: 4:01 PM
 * @property Teaching_model mTeaching
 */

class Teaching Extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Teaching_model","mTeaching");

    }

    /*
     * Teaching / Academic position section start
     */
    public function teaching_cont(){
        $data= array(
            'post'=>$this->mTeaching->get_teaching()
        );
        master_view("backend/teaching/teaching",$data);
    }

    public function add_teaching(){
        if (is_submitted()){
            $this->mTeaching->add_teaching();
            redirect("Teaching/eployment_cont");
        }
        master_view("backend/biodata/add_teaching");
    }

    public function edit_teaching($id){
        if (is_submitted()){
            $this->mTeaching->edit_teaching($id);
            redirect("Teaching/teaching_cont");
        }
        $data= array(
            'editable'=>$this->mTeaching->get_single_teaching($id)
        );
        master_view("backend/biodata/edit_teaching",$data);
    }
    public function delete_teaching($id){
        $this->mTeaching->delete_teaching("$id");
        redirect("Teaching/eployment_cont");
    }




}