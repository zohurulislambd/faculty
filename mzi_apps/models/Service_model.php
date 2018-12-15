<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/26/2018
 * Time: 2:32 PM
 * @property CI_DB_query_builder  db
 * @property CI_Input  input
 */

class Service_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function get_services(){
        $q =  $this->db->get("services");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }
    public function get_single_services($id){
        $q =  $this->db->get_where("services", array('id'=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_services(){
        $data = $this->input->post(null, true);
        $this->db->insert('services',$data);
    }

    public function edit_services($id){
        $data = $this->input->post(null,true);
        $this->db->update('services',$data,array('id'=>$id));
    }

    public function delete_service($id){
        $this->db->delete('services',array('id'=>$id));
    }




}