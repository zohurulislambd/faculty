<?php
/**
 * Created by PhpStorm.
 * User: ZOHURUL_CSE
 * Date: 8/4/2018
 * Time: 1:06 AM
 */
function master_view ($page, $data = null){
        $ci = & get_instance();
        $ci->load->view('backend/common/header');
        $ci->load->view('backend/common/sidebar');
        $ci->load->view($page, $data);
        $ci->load->view('backend/common/footer');
         }

function is_submitted(){
  return !empty($_POST);
}
