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
   Teaching section
   ======================================*/
    public function get_teaching(){
        $q =  $this->db->get("teaching");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }
    public function get_single_teaching($id){
        $q =  $this->db->get_where("teaching", array('id'=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_teaching(){
        $data = $this->input->post(null, true);

        $this->db->insert('teaching',$data);
    }

    public function edit_teaching($id){
        $data = $this->input->post(null, true);

        $this->db->update('teaching',$data,array('id'=>$id));
    }

    public function delete_teaching($id){
        $this->db->delete('teaching',array('id'=>$id));
    }
    /*
     * end Teaching section
     *
     * */





}