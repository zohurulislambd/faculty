<?php
/**
 * Created by PhpStorm.
 * User: TKH_WEB
 * Date: 9/26/2018
 * Time: 4:33 PM
 * @property Contact_model mContact
 * @property CI_Form_validation validation
 * @property CI_Input input
 *  @property CI_Session session
 * @property CI_Email  email
 */

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model','mContact');
        $this->load->library(array("form_validation" => "validation"));
        $this->load->library('email');
        $this->load->helper('download');
        if (!$this->session->userdata('is_logged')){
            redirect('Authentication/login');
        }
    }
    public function contact_info(){
        $data = array(
            'post'=>$this->mContact->get_contact()
        );
        master_view("backend/contacts/contact",$data);
    }

   /* public function contact_us(){
        $data = array("is_postback" => false,"msg" => '');

        if (is_submitted()){
            $data["is_postback"] = true;

            $this->validation->set_rules('name','Name','required');
            $this->validation->set_rules('email','Email','required|valid_email', array(
                "validation"=>"Why don\'t you fill the email field!",
                "required"=>"Your email address seems invalid!"
            ));
            $this->validation->set_rules('phone','Phone','required');
            $this->validation->set_rules('subject','Subject');
            $this->validation->set_rules('message','Message');
            if ($this->validation->run()){
                $this->mContact->add_contact_info();
                $data["msg"] = "Done";
            }
            else
            {
                $data["msg"] = "Done";
            }

            $config['protocol']    = 'smtp';

            $config['smtp_host']    = 'ssl://smtp.gmail.com';

            $config['smtp_port']    = '465';

            $config['smtp_timeout'] = '7';

            $config['smtp_user']    = 'nure.tkh@gmail.com';

            $config['smtp_pass']    = 'gmailnuretkh';

            $config['charset']    = 'utf-8';

            $config['newline']    = "\r\n";

            $config['mailtype'] = 'text'; // or html

            $config['validation'] = TRUE; // bool whether to validate email or not

            $this->email->initialize($config);


            $this->email->from('nure.tkh@gmail.com', 'sender_name');
            $this->email->to('zohurul.tkh@gmail.com');


            $this->email->subject('Email Test');

            $this->email->message('Testing the email class.');

            if ( ! $this->email->send())
            {
                die("Tomato");
            }else{
                $this->email->send();
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    */
    /*test*/

    public function sendMail()
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'zohurul.tkh@gmail.com', // change it to yours
            'smtp_pass' => 'mzitkh135', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $message = '';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('zohurul.tkh@gmail.com'); // change it to yours
        $this->email->to('zohurulislambd1@gmail.com');// change it to yours
        $this->email->subject('Hello Zohurul Islam');
        $this->email->message($message);
        if($this->email->send())
        {
            echo 'Email sent.';
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }

    public function del_cont($id){
        $this->mContact->del_contact($id);
        redirect('Contact/contact_info');
    }

    /*============contact address section code start here============*/

    public function all_cont_add(){
        $data = [
            'post'=>$this->mContact->get_cont_add()
        ];
        master_view('backend/contacts/address',$data);
    }

    public function add_cont_address(){
        if (is_submitted()){
            $this->mContact->add_cont_add();
            redirect('Contact/all_cont_add');
        }
        master_view('backend/contacts/add_address');
    }
    public function edit_cont_add($id){
        if (is_submitted()){
            $this->mContact->edit_cont_add($id);
            redirect('Contact/all_cont_add');
        }
        $data = [
            'editable'=>$this->mContact->get_single_address_by_id($id)
        ];
        master_view('backend/contacts/edit_address',$data);
    }
    public function del_cont_add($id){
       $this->mContact->delete_cont_add($id);
        redirect('Contact/all_cont_add');
    }

}