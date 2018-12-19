<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/15/2018
 * Time: 4:02 PM
 * @property CI_DB_query_builder  db
 * @property CI_Input  input
 */

class Teaching_model Extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /*=======================
   Current Teaching section
   ======================================*/
    public function get_teaching(){
        $q =  $this->db->get("current_teaching");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }
    public function get_single_teaching($id){
        $q =  $this->db->get_where("current_teaching", array('id'=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_teaching(){
        $data = $this->input->post(null, true);

        $this->db->insert('current_teaching',$data);
    }

    public function edit_teaching($id){
        $data = $this->input->post(null, true);

        $this->db->update('current_teaching',$data,array('id'=>$id));
    }

    public function delete_teaching($id){
        $this->db->delete('current_teaching',array('id'=>$id));
    }
    /*
     * end Current Teaching section
     *
     * */


    /*=======================
  Current Teaching section
  ======================================*/
    public function get_teaching_history(){
        $q =  $this->db->get("history_teaching");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }
    public function get_single_teaching_history($id){
        $q =  $this->db->get_where("history_teaching", array('id'=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_teaching_history(){
        $data = $this->input->post(null, true);

        $this->db->insert('history_teaching',$data);
    }

    public function edit_teaching_history($id){
        $data = $this->input->post(null, true);
        $this->db->update('history_teaching',$data,array('id'=>$id));
    }

    public function delete_teaching_history($id){
        $this->db->delete('history_teaching',array('id'=>$id));
    }
    /*
     * end Current Teaching section
     *
     * */




}