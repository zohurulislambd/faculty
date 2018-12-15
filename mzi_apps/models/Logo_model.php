<?php
/**
 * Created by PhpStorm.
 * User: TKH_2(WEB)
 * Date: 6/30/2018
 * Time: 4:33 PM
 * @property CI_DB_query_builder db
 * @property  CI_Input input
 */

class Logo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all_logo()
    {
        $q = $this->db->get('logo');
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return array();
    }
    public function get_logo(){
        $q = $this->db->get("logo");
        if ($q->num_rows() > 0){
            return $q->row();
        }return array();
    }
    public function get_single_logo($id){
        $query = $this->db->get_where("logo",array("id" => $id));
        if ($query-> num_rows() > 0){
            return $query->row();
        }
        return null;
    }

//    add logo section
  /*  public function add_logo($file_name){
         $this->input->post(null, true);
           $data = array(
               'logo_title'=>$this->input->post('logo_title'),
                'image' => $file_name
           );
        $this->db->insert('logo',$data);
    }*/
/*change logo section*/
    public function edit_logo($id){
        $post = $this->input->post(null, true);
        $post['image'] = $this->upload->data('file_name');
        //delete previus image code
        $oldData = $this->db->get_where("logo",array('id'=>$id))->row();
        $oldFileName = $oldData->image;
        unlink(BASEPATH."./uploads/$oldFileName");
        $this->db->update('logo',$post, array('id'=>$id));
    }

    /*delete section*/
    public function delete_logo_list($id){
        $this->db->delete("logo", array("id" => $id));
    }

}
