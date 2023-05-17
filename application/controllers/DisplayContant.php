<?php

class DisplayContant extends CI_Controller{
    public function __construct()
	{
	parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->helper('customaction_helper');
    $this->load->model('UserModel','um');
    $this->load->library('encryption');
    date_default_timezone_set('Asia/Kolkata');

	}
/* ********************showing all the page********************  */
                    public function index(){
                        $nav_category['data']=$this->um->nav_category();
                        $this->load->view('user/head/header');
                        $this->load->view('user/head/css');
                        $this->load->view('user/head/navbar',$nav_category);
                        $this->load->view('user/user_animation');
                        $this->load->view('user/body/main');
                        $this->load->view('user/footer/footer');
                        $this->load->view('user/footer/js');
                        $this->load->view('user/footer/endhtml');
                    }
    
    
    
/* ********************showing login & registrantion page********************  */

   public function loginPage(){
    $nav_category['data']=$this->um->nav_category();
    $this->load->view('user/head/header');
    $this->load->view('user/head/css');
    $this->load->view('user/user_animation');
    $this->load->view('user/head/navbar',$nav_category);
    $this->load->view('user/body/login');
    $this->load->view('user/footer/footer');
    $this->load->view('user/footer/js');
    $this->load->view('user/footer/endhtml');
   }

/* ********************login page********************  */

/* public function login(){

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
    
} */

public function login(){

    $this->form_validation->set_rules('login_email', 'Email', 'trim|required');
    $this->form_validation->set_rules('login_password', 'Password', 'trim|required');

    if($this->form_validation->run()==true){
        $data['email_id']=$this->input->post('login_email',true);
        $password= $this->input->post('login_password',true);
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
                    $hashed_password = $login[0]->password;
                    if (password_verify($password, $hashed_password)) {
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
                            echo json_encode(array('status'=>5,'msg'=>'Login failed.'));
                         }
                    } else {
                        echo json_encode(array('status'=>1,'msg'=>'Incorrect password. Please try again.')); 
                    }
                }
            }
            else{
                echo json_encode(array('status'=>1,'msg'=>'Incorrect email or password. Please try again.'));  
            }

        }


    }
    
}


   public function usernamechake(){
    $id=userId();
    if(empty($id)){
        echo 0;
    }
    else{
        echo 1;
    }
   }
   public function logout(){
    $this->session->unset_userdata('name');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('id');
    $this->session->sess_destroy();
    redirect('DisplayContant/index');
   }


   /* ****************** FOR REGISTRATION ****************** */


   public function register(){
    $this->form_validation->set_rules('user_name', 'Name', 'trim|required');
    $this->form_validation->set_rules('user_email', 'Email', 'trim|required');
    $this->form_validation->set_rules('user_phone', 'Phone', 'trim|required');
    $this->form_validation->set_rules('user_password', 'Password', 'trim|required'); 
    if($this->form_validation->run()==true){
        // $salt = bin2hex(random_bytes(22));
        $data['user_name']=$this->input->post('user_name',true);
        $data['phone_number']=$this->input->post('user_phone',true);
        $data['email_id']=$this->input->post('user_email',true);
        $data['user_created']=date('d/m/y h:m:sa');
        $data['status']=0;
        $nomarmal_passwor=$this->input->post('user_password',true);
        $data['password'] = password_hash($nomarmal_passwor , PASSWORD_BCRYPT);
        $check_email_phone=$this->um->check_email_phone($data['phone_number'], $data['email_id']);
        if($check_email_phone ===1){
            echo json_encode(array('status'=>1,'msg'=>'Enter email and phone exits in our system'));
        }else{
            $register=$this->um->register($data);
            if($register){
                echo json_encode(array('status'=>2,'msg'=>'Registration successful!')); 
            }else{
                echo json_encode(array('status'=>3,'msg'=>'Registration unsuccessful. Please try again later.'));
            }
        }

    }
}
public function product_search($id=null){
    $cat_id['product']=$this->um->productByCategory($id);
    $nav_category['data']=$this->um->nav_category();
    $cat_id['discount']=$this->um->discount_percent();
    $this->load->view('user/head/header');
    $this->load->view('user/head/css');
    $this->load->view('user/user_animation');
    $this->load->view('user/head/navbar',$nav_category);
    $this->load->view('user/body/product',$cat_id);
    $this->load->view('user/footer/footer');
    $this->load->view('user/footer/js');
    $this->load->view('user/footer/endhtml'); 
}


}

?>