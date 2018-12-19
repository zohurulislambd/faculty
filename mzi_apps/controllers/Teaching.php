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
    public function all_teaching(){
        $data= array(
            'post'=>$this->mTeaching->get_teaching()
        );
        master_view("backend/teaching/teaching",$data);
    }

    public function add_teaching(){
        if (is_submitted()){
            $this->mTeaching->add_teaching();
            redirect("Teaching/all_teaching");
        }
        master_view("backend/teaching/add_teaching");
    }

    public function edit_teaching($id){
        if (is_submitted()){
            $this->mTeaching->edit_teaching($id);
            redirect("Teaching/all_teaching");
        }
        $data= array(
            'editable'=>$this->mTeaching->get_single_teaching($id)
        );
        master_view("backend/teaching/edit-teaching",$data);
    }

    public function del_teaching($id){
        $this->mTeaching->delete_teaching("$id");
        redirect("Teaching/all_teaching");
    }
/*=============================
 * End Current Teaching section
*==========================






*/
/*=============================
 * Start History Teaching section
*========================== */
public function all_history_teaching(){
        $data= array(
            'post'=>$this->mTeaching->get_teaching_history()
        );
        master_view("backend/teaching/history_teaching",$data);
    }

    public function add_history_teaching(){
        if (is_submitted()){
            $this->mTeaching->add_teaching_history();
            redirect("Teaching/all_history_teaching");
        }
        master_view("backend/teaching/add_history_teaching");
    }

    public function edit_history_teaching($id){
        if (is_submitted()){
            $this->mTeaching->edit_teaching_history($id);
            redirect("Teaching/all_history_teaching");
        }
        $data= array(
            'editable'=>$this->mTeaching->get_single_teaching_history($id)
        );
        master_view("backend/teaching/edit-history-teaching",$data);
    }

    public function del_history_teaching($id){
        $this->mTeaching->delete_teaching_history("$id");
        redirect("Teaching/all_history_teaching");
    }

/*=============================
 * End History  Teaching section
*==========================
*/



}