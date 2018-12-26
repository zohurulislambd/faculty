<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 7/31/2018
 * Time: 12:14 AM
 * @property CI_Input input
 * @property CI_DB_query_builder  db
 */

class Banner_model extends CI_Model
{
 public function __construct()
 {
     parent:: __construct();
 }

    public function get_bnr_cont()
    {
        $q = $this->db->get('banner_cont');
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }
/* public function add_cont(){
     $data = array(
         'title' => $this->input->post("title",true),
         'subtitle' => $this->input->post("subtitle",true),
         'body' => $this->input->post("body",true)
     );
     $this->db->insert('banner_cont', $data);
 }*/

public function get_single_post($id){
    $query = $this->db->get_where("banner_cont",array("id" => $id));
    if ($query->num_rows() > 0){
        return $query->row();
    }return null;
}

/*change banner content*/

    public function edit_bnr_cont($id){
        $this->input->post(null, true);
        $data = array(
            'title'=>$this->input->post("title"),
            'sub_title'=>$this->input->post("sub_title"),
            'body'=>$this->input->post("body")
        );
        $this->db->update('banner_cont',$data, array("id"=> $id));
    }


}