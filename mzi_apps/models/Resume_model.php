<?php
/**
 * Created by PhpStorm.
 * User: web developer
 * Date: 1/3/2019
 * Time: 3:21 PM
 * @property CI_DB_query_builder  db
 * @property CI_Input input
 */

class Resume_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    /*===============================
    start cv/ resume section
     * */
    public function get_cv()
    {
        $q = $this->db->get('resume');
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();

    }

    public function get_single_resume($id){
        $q = $this->db->get_where('resume', array('id'=>$id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function save_resume()
    {
        $post = $this->input->post(null, true);
        $post['resume'] = $this->upload->data('file_name');
        $this->db->insert('resume',$post);
    }

    public function edit_gallery_item($id){
        $post = $this->input->post(null, true);
        $post['resume'] = $this->upload->data('file_name');

        //delete previus image code
        $oldData = $this->db->get_where("resume",array('id'=>$id))->row();
        $oldFileName = $oldData->project_feature;
        unlink(BASEPATH."./uploads/$oldFileName");
        $this->db->update('resume',$post, array('id'=>$id));
    }
}