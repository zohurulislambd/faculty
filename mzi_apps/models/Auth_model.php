<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 18/09/29
 * Time: 1:14 PM
 * @property
 * @property CI_DB_query_builder  db
 */

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user(){

    }

    public function get_user_by_username($username){
        $q = $this->db->get_where('mzi_user',['email' => $username]);
        if ($q->row()){
            return $q->row();
        }return null;
    }

    public function get_user_by_id($id){

    }

}