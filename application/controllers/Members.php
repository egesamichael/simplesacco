<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Members extends CI_Controller {
  
     public function __construct()
        {
         parent::__construct();
         $this->load->model('User');
             $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->user_id = $this->session->userdata('user_id');
            //     $this->first_name = $this->session->userdata('first_name');
        }
  
  
    public function index()
    {
        redirect(base_url('manageusers'));
    }
  
    public function post_register()
    {
 
      /*  $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('register');
        }
        else
        {  */ 
            $data = array(
               'fname' => $this->input->post('fname'),
               'lname' => $this->input->post('lname'),
               'gender' => $this->input->post('gender'),
               'dob' => $this->input->post('dob'),
               'account' => $this->input->post('account'),
 
             );
   
            $check = $this->User->insert_user($data);
 
          /*  if($check != false){
 
                $user = array(
                 'user_id' => $check,
                 'email' => $this->input->post('email'),
                 'first_name' => $this->input->post('first_name'),
                 'last_name' => $this->input->post('last_name'),
                );
             }
  
             $this->session->set_userdata($user); */
 
             redirect( base_url('manageusers') ); 
            
 
         
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('home'));
   }    
 
}