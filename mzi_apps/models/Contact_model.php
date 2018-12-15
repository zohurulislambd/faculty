<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/26/2018
 * Time: 4:34 PM
 *  @property  CI_DB_query_builder db
 * @property CI_Input  input
 */

class Contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function get_contact(){
        $q = $this->db->get("contacts");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();

    }

    public function add_contact_info(){
        $data = $this->input->post(null,true);
        $this->db->insert('contacts',$data);
    }

    public function del_contact($id){
        $this->db->delete("contacts",array('id'=>$id));
    }

    /*============contact address section code start here============*/

    public function get_cont_add(){
        $q = $this->db->get('contact_address');
        if($q->num_rows() > 0){
            return $q->result();
        }return [];
    }

    public function get_single_address_by_id($id){
        $q = $this->db->get_where('contact_address',['id'=>$id]);
        if($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_cont_add(){
        $data = $this->input->post(null, true);
        $this->db->insert('contact_address',$data);
    }

    public function edit_cont_add($id){
        $data = $this->input->post(null, true);
        $this->db->update('contact_address',$data,['id'=>$id]);
    }

    public function delete_cont_add($id){
        $this->db->delete('contact_address',['id'=>$id]);
    }


}