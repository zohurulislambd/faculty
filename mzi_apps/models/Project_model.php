<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/23/2018
 * Time: 12:56 PM
 * @property  CI_DB_query_builder db
 * @property CI_Input  input
 */

class Project_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_project(){
        $q = $this->db->get('project');
        if ($q->num_rows()> 0){
            return $q->result();
        }
        return array();
    }
    public function get_single_pro($id){
            $q = $this->db->get_where('project', array('id'=>$id));
            if ($q->num_rows() > 0){
                return $q->row();
            }return null;
    }

    public function save_project()
    {
        $post = $this->input->post(null, true);
        $post['project_feature'] = $this->upload->data('file_name');
        $this->db->insert('project',$post);
    }

    public function edit_project($id){
        $post = $this->input->post(null, true);
        $post['project_feature'] = $this->upload->data('file_name');
        //delete previus image code
        $oldData = $this->db->get_where("project",array('id'=>$id))->row();
        $oldFileName = $oldData->project_feature;
        unlink(BASEPATH."../uploads/$oldFileName");
        $this->db->update('project',$post, array('id'=>$id));
    }
    public function del_pro($id){
        $this->db->delete('project',array('id'=>$id));
    }


}