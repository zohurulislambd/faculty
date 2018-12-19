<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 12/11/2018
 * Time: 4:45 PM
 * @property CI_DB_query_builder db
 * @property CI_Input  input
 * @property CI_Upload  upload
 */

class Research_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    /*
     * =======================================
     * research_project_project
     * ==========================
     *
     * */
    public function get_all_research_project()
    {
        $q = $this->db->get('research_project');
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }

    public function get_single_research_project($id)
    {
        $q = $this->db->get_where('research_project', array('id'=>$id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_research_project()
    {
       $data =  $this->input->post(null,true);
       $data ['project_image']= $this->upload->data('file_name');
       $this->db->insert('research_project',$data);
    }

    public function edit_research_project($id){
        $data = $this->input->post(null, true);
        $data['project_image'] = $this->upload->data('file_name');

        //delete previus image code
        $oldData = $this->db->get_where("research_project",array('id'=>$id))->row();
        $oldFileName = $oldData->project_image;
        unlink(BASEPATH."/uploads/$oldFileName");
        $this->db->update('research_project',$data, array('id'=>$id));
    }

    public function del_research_project($id)
    {
        $this->db->delete('research_project',array('id'=>$id));
    }

    /*
     * ===========================
     * Interest area start
     * ===========================
     * */
    public function get_all_interest()
    {
        $q = $this->db->get('interested');
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }

    public function get_single_interest($id)
    {
        $q = $this->db->get_where('interested', array('id'=>$id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_interest_cont()
    {
        $data =  $this->input->post(null,true);
        $this->db->insert('interested',$data);
    }
    public function edit_interest_cont($id)
        {
            $data =  $this->input->post(null,true);
            $this->db->update('interested',$data, array('id'=> $id));
        }

    public function del_interest_cont($id)
    {
        $this->db->delete('interested',array('id'=>$id));
    }


}

