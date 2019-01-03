<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 8/16/2018
 * Time: 10:54 PM
 * @property CI_DB_query_builder  db
 * @property CI_Input input
 */

class About_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
/*
    About section contents
*/
    public function get_about_cont(){
        $q = $this->db->get('about');
        if ($q->num_rows() >0){
            return $q->result();
        }
        return array();
    }
    public function get_singel_post($id){
        $q= $this->db->get_where("about", array("id"=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        } return null;
    }

    public function edit_about_cont($id){
        $post = $this->input->post(null, true);
        $post['my_feature'] = $this->upload->data('file_name');
        //delete previus image code
        $oldData = $this->db->get_where("about",array('id'=>$id))->row();
        $oldFileName = $oldData->my_feature;
        unlink(BASEPATH."../uploads/$oldFileName");
        $this->db->update('about',$post, array('id'=>$id));
    }

    /*skills section start*/
    /*skill add section here*/

    public function  get_skill(){
        $q = $this->db->get('personal_skill');
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }

    public function  get_single_skill($id){
        $q = $this->db->get_where('personal_skill', array("id"=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_skill(){
        $this->input->post(null, true);
        $data=array(
            'skill_progress_title'=>$this->input->post('skill_progress_title'),
            'skill_progress_limit'=>$this->input->post('skill_progress_limit')
        );
        $this->db->insert('personal_skill',$data);
    }

    public function edit_skill($id){
        $data=array(
            'skill_progress_title'=>$this->input->post('skill_progress_title',true),
            'skill_progress_limit'=>$this->input->post('skill_progress_limit',true)
        );
        $this->db->update('personal_skill',$data, array('id'=>$id));
    }

    public function delete($id){
        $this->db->delete('personal_skill',array('id' => $id));
    }




}