<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/26/2018
 * Time: 4:47 PM
 * @property CI_DB_query_builder db
 * @property CI_Input input
 */

class Social_media_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    /*==========social media section start==========*/

    public function get_socail_media_all()
    {
        $q = $this->db->get('socail_media');
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }
    public function add_socail_media(){
        $data = $this->input->post(null,true);
        $this->db->insert('socail_media', $data);
    }

    public function get_single_socail_media($id){
        $query = $this->db->get_where("socail_media",array('id' => $id));
        if ($query->num_rows() > 0){
            return $query->row();
        }return null;
    }

    public function edit_socail_media($id){
        $data = $this->input->post(null, true);
        $this->db->update('socail_media', $data, array('id'=> $id));
    }

    public function delete_socail($id){
        $this->db->delete('socail_media',array('id'=> $id));

    }

}