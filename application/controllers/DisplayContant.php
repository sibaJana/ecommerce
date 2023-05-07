<?php

class DisplayContant extends CI_Controller{
    public function __construct()
	{
	parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->model('UserModel','um');
	}
/* ********************showing all the page********************  */
                    public function index(){
                        $this->load->view('user/head/header');
                        $this->load->view('user/head/css');
                        $this->load->view('user/head/navbar');
                        $this->load->view('user/user_animation');
                        $this->load->view('user/body/main');
                        $this->load->view('user/footer/footer');
                        $this->load->view('user/footer/js');
                        $this->load->view('user/footer/endhtml');
                    }
    
    
    
/* ********************showing login & registrantion page********************  */

   public function loginPage(){
    $this->load->view('user/head/header');
    $this->load->view('user/head/css');
    $this->load->view('user/user_animation');
    $this->load->view('user/head/navbar');
    $this->load->view('user/body/login');
    $this->load->view('user/footer/footer');
    $this->load->view('user/footer/js');
    $this->load->view('user/footer/endhtml');
   }

/* ********************login page********************  */

public function login(){

    $this->form_validation->set_rules('login_email', 'Email', 'trim|required');
    $this->form_validation->set_rules('login_password', 'Password', 'trim|required');

    if($this->form_validation->run()==true){
       $data['email_id']=$this->input->post('login_email',true);
       $data['password']= $this->input->post('login_password',true);
       $email_id=$this->um->email_check($data['email_id']);
       if(empty($email_id)){
        echo json_encode(array('status'=>0,'msg'=>'The email you entered is not registered in our system'));
       }else{
        $login=$this->um->login($data);
        if(! empty($login)){
            if($login[0]->status==0){
                echo json_encode(array('status'=>2,'msg'=>'Sorry, your email has not been verified yet Please check your email inbox'));   
            }
            else if($login[0]->status==2){
                echo json_encode(array('status'=>3,'msg'=>'Your account has been blocked by the admin')); 
            }
            else if($login[0]->status==1){
                $data = array(
                    'name' => $login[0]->user_name,
                    'email' =>$login[0]->email_id,
                    'id'=>$login[0]->id
                 );
                 
                $this->session->set_userdata($data);

                 if($this->session->userdata('email')){
                    echo json_encode(array('status'=>4,'msg'=>'Login successful.'));
                 }
                 else{
                    echo json_encode(array('status'=>5,'msg'=>'Login faild.'));
                 }

            }

        }
        else{
            echo json_encode(array('status'=>1,'msg'=>'Incorrect password. Please try again.'));  
        }

       }


    }
    
   }


}

?>