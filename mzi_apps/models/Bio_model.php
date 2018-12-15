<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/20/2018
 * Time: 2:04 PM
 *@property CI_DB_query_builder db
 * @property  CI_Input input
 * @property CI_Upload  upload
 */

class Bio_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
  }

  /*
   *  Education & Training section
   * */
  public function get_bio ()
  {
      $q = $this->db->get('education');
      if ($q->num_rows() > 0) {
          return $q->result();
      }return array();
  }
public function get_single_info($id){
      $q = $this->db->get_where('education', array('id'=> "$id"));
      if ($q->num_rows() >0 ){
          return $q->row();
      }return null;
}

public function add_edu_bio(){
    $data = $this->input->post(null, true);
   /* $data = array(
        'edu_title'=>$this->input->post("edu_title"),
        'institute_name'=>$this->input->post("institute_name"),
        'year'=>$this->input->post("year"),
        'field_of_study'=>$this->input->post("field_of_study"),
        'details'=>$this->input->post("details")
    );*/
    $this->db->insert("education",$data);
}
    public function edit_edu_bio($id){
    $data = $this->input->post(null, true);
       /* $data = array(
            'edu_title'=>$this->input->post('edu_title', true),
            'institute_name'=>$this->input->post('institute_name', true),
            'year'=>$this->input->post('year', true),
            'details'=>$this->input->post('details', true)
        );*/
        $this->db->update('education',$data, array('id'=>$id));
    }

    public function edu_del($id){
        $this->db->delete("education",array('id'=> $id));
    }


    /*=======================
    bio for Employment / Academic Positions
    ======================================*/
    public function get_employment(){
        $q =  $this->db->get("employment");
        if ($q->num_rows() > 0){
            return $q->result();
        }return array();
    }
    public function get_single_employment($id){
        $q =  $this->db->get_where("employment", array('id'=> $id));
        if ($q->num_rows() > 0){
            return $q->row();
        }return null;
    }

    public function add_employment(){
        $data = $this->input->post(null, true);
        /*$data = array(
            'designation'=>$this->input->post("designation",true),
            'company'=>$this->input->post("company",true),
            'job_start_year'=>$this->input->post("job_start_year",true),
            'job_end_year'=>$this->input->post("job_end_year",true),
            'responsibility'=>$this->input->post("responsibility",true),
        );*/
        $this->db->insert('employment',$data);
    }

    public function edit_employment($id){
        $data = $this->input->post(null, true);
        /*$data = array(
            'designation'=>$this->input->post("designation",true),
            'company'=>$this->input->post("company",true),
            'job_start_year'=>$this->input->post("job_start_year",true),
            'job_end_year'=>$this->input->post("job_end_year",true),
            'responsibility'=>$this->input->post("responsibility",true),
        );*/
        $this->db->update('employment',$data,array('id'=>$id));
    }

    public function delete_emp($id){
        $this->db->delete('employment',array('id'=>$id));
    }
/*
 * end employeement section
 *
 * */



/*==========================================
 * start awards section
 * ==================================*/

    public function get_award()
    {
       $q =  $this->db->get("awards");
        if ($q->num_rows() > 0) {
            return $q->result();
        }return array();
    }
    public function get_single_award($id)
    {
        $q =  $this->db->get_where("awards", array('id'=> $id));
        if ($q->num_rows() > 0) {
            return $q->row();
        }return null;
    }

    public function add_award()
    {
       $data = $this->input->post(null, true);
       $data['aw_image'] = $this->upload->data('file_name');
       $this->db->insert('awards',$data);
    }

    /*
     * edit awards image and
     * */
    public function edit_award($id){
        $data = $this->input->post(null, true);
        $data['aw_image'] = $this->upload->data('file_name');

        //delete previus image code
        $oldData = $this->db->get_where("awards",array('id'=>$id))->row();
        $oldFileName = $oldData->aw_image;
        unlink(BASEPATH."../uploads/$oldFileName");
        $this->db->update('awards',$data, array('id'=>$id));
    }

     public function del_award($id)
        {
           $this->db->delete("awards",array('id'=>$id));
        }


    /*=============================
     * end awards section
     * ============================*/









}