<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/18/2018
 * Time: 11:49 AM
 * @property CI_Input  input
 * @property CI_DB_query_builder  db
 * @property CI_Upload  upload
 */

class Publication_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_publication(){
        $q =  $this->db->get("publication");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }
    public function get_single_publication($id){
        $q =  $this->db->get_where("publication", array('id'=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_publication()
    {
        $data =  $this->input->post(null,true);
        $data ['photo']= $this->upload->data('file_name');
        $this->db->insert('publication',$data);
    }

    public function edit_publication($id){
        $data = $this->input->post(null, true);
        $data ['photo']= $this->upload->data('file_name');
        //delete previus image code
        $oldData = $this->db->get_where("publication",array('id'=>$id))->row();
        $oldFileName = $oldData->photo;
        unlink(BASEPATH."/uploads/publications/$oldFileName");
        $this->db->update('publication',$data, array('id'=>$id));
    }
    public function delete_publication($id){
        $this->db->delete('publication',array('id'=>$id));
    }

    /*
     * end Publication section
     *
     * */


}