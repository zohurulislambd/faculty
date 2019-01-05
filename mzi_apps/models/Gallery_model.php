<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/23/2018
 * Time: 12:56 PM
 * @property  CI_DB_query_builder db
 * @property CI_Input  input
 */

class gallery_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_gallery(){
        $q = $this->db->get('gallery');
        if ($q->num_rows()> 0){
            return $q->result();
        }
        return array();
    }
    public function get_single_pro($id){
            $q = $this->db->get_where('gallery', array('id'=>$id));
            if ($q->num_rows() > 0){
                return $q->row();
            }return null;
    }

    public function save_gallery()
    {
        $post = $this->input->post(null, true);
        $post['gallery_feature'] = $this->upload->data('file_name');
        $this->db->insert('gallery',$post);
    }

    public function edit_gallery_item($id){
        $post = $this->input->post(null, true);
        $post['gallery_feature'] = $this->upload->data('file_name');

        //delete previus image code
        $oldData = $this->db->get_where("gallery",array('id'=>$id))->row();
        $oldFileName = $oldData->project_feature;
        unlink(BASEPATH."../uploads/gallery/$oldFileName");
        $this->db->update('gallery',$post, array('id'=>$id));
    }

    /*test edit image */

    public function del_gallery_item($id){
        $this->db->delete('gallery',array('id'=>$id));
    }


}