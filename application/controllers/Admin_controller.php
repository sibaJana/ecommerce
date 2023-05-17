<?php

class Admin_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('customaction_helper');
        $this->load->model('Admin_model','am');
        $this->load->library('encryption');
    }
    
        
    
    // index page 
     function index(){
        if(isSession()){
            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/animation');
            $this->load->view('admin/header/nav');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/main/body');
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');
        }
        else{
            redirect('Admin_controller/login_page');
        }
       
    }
    // login page 
    public function login_page(){
        
        $this->load->view('admin/header/header');
        $this->load->view('admin/header/css');
        $this->load->view('admin/header/animation');
        $this->load->view('admin/main/login');
        $this->load->view('admin/footer/js');
        $this->load->view('admin/footer/endhtml');
    }
    //admin login 
     function login(){
       
        $this->form_validation->set_rules('login_email', 'Email', 'trim|required');
        $this->form_validation->set_rules('login_password', 'Password', 'trim|required');
    
        if($this->form_validation->run()==true){
            $data['email']=$this->input->post('login_email',true);
            $password= $this->input->post('login_password',true);
            $email_id=$this->am->email_check($data['email']);
            if(empty($email_id)){
                echo json_encode(array('status'=>0,'msg'=>'The email you entered is not registered in our system'));
            }else{
                        $login=$this->am->login($data);
                        $hashed_password = $login[0]->password;
                        if (password_verify($password, $hashed_password)) {
                            $data = array(
                                'name' => $login[0]->name,
                                'email' =>$login[0]->email,
                                'id'=>$login[0]->id
                             );
                             
                            $this->session->set_userdata($data);
                             if($this->session->userdata('email')){
                                echo json_encode(array('status'=>1,'msg'=>'Login successful.'));
                             }
                             else{
                                echo json_encode(array('status'=>2,'msg'=>'Login failed.'));
                             }
                        }
                        else {
                            echo json_encode(array('status'=>3,'msg'=>'Incorrect password. Please try again.')); 
                        }
                }
                
    
            }
    
    
        }

        // logout page 
        public function logout(){ 
            if(isSession()){
                $this->session->sess_destroy();
                
                $this->session->unset_userdata('name');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('id');
                redirect('Admin_controller/login_page');
                
            }
            
        }

        // category

        public function category_page(){
            if(isSession()){

            
            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/animation');
            $this->load->view('admin/header/nav');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/main/category');
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');
        }else{
            redirect('Admin_controller/login_page');
        }
    }

        public function caregory(){
            if(isSession()){
          $data['category_name']=$this->input->post('category',true); 
          $data['category_desc']=$this->input->post('category_desc',true); 
          $check_category=$this->am->check_category($data['category_name']);
          if(!empty($check_category)){
            echo json_encode(array('status'=>1,'msg'=>'Sorry, the category name you entered already exists in our system'));             
          } 
          else{
            $category=$this->am->category($data);
            if($category){
                echo json_encode(array('status'=>2,'msg'=>'Congratulations! You have successfully created a new category'));             
          
            }else{
                echo json_encode(array('status'=>3,'msg'=>'Please try again later, as the service is currently unavailable.'));             
         
            }
          }
        }
        else{
            redirect('Admin_controller/login_page');
        }
        }

        /* Product inventory */

        public function inventory(){
           
            if(isSession()){
                $data['quantity']=$this->input->post('quentity',true); 
                $data['created_at']=date('d-m-y h:m:sa');
 

                  $invertory=$this->am->invertory($data);
                  if($invertory){
                      echo json_encode(array('status'=>1,'msg'=>'Congratulations! You have successfully created a new invertory'));             
                  }else{
                      echo json_encode(array('status'=>2,'msg'=>'Please try again later, as the service is currently unavailable.'));             
               
                  }
                }
                else{
                    redirect('Admin_controller/login_page');
                }
              }
              
            

        

        public function Product_inventory(){

            if(isSession()){

            
                $this->load->view('admin/header/header');
                $this->load->view('admin/header/css');
                $this->load->view('admin/header/animation');
                $this->load->view('admin/header/nav');
                $this->load->view('admin/header/leftnav');
                $this->load->view('admin/main/inventory');
                $this->load->view('admin/footer/footer');
                $this->load->view('admin/footer/js');
                $this->load->view('admin/footer/endhtml');
            }else{
                redirect('Admin_controller/login_page');
            }


        }
        public function display(){
            $display=$this->am->display();
            echo json_encode(array('data'=>$display));
        }


        /* discount */

        public function discount_page(){
            if(isSession()){            
                $this->load->view('admin/header/header');
                $this->load->view('admin/header/css');
                $this->load->view('admin/header/animation');
                $this->load->view('admin/header/nav');
                $this->load->view('admin/header/leftnav');
                $this->load->view('admin/main/discount');
                $this->load->view('admin/footer/footer');
                $this->load->view('admin/footer/js');
                $this->load->view('admin/footer/endhtml');
            }else{
                redirect('Admin_controller/login_page');
            }

        }
        public function discount(){
            if(isSession()){
                $data['name']=$this->input->post('discount_name',true); 
                $data['discount_percent']=$this->input->post('discount_Percent',true); 
                $data['dese']=$this->input->post('discount_desc',true); 
                $data['active']=1; 
                $data['start_date']=date('d-m-y h:m:sa');
                $check_name=$this->am->discount_name_check($data['name']);
                if(!empty($check_name)){
                  echo json_encode(array('status'=>1,'msg'=>'Sorry, the discount name you entered already exists in our system'));             
                } 
                else{
                  $discount=$this->am->discount($data);
                  if($discount){
                      echo json_encode(array('status'=>2,'msg'=>'Congratulations! You have successfully created a new discount'));             
                
                  }else{
                      echo json_encode(array('status'=>3,'msg'=>'Please try again later, as the service is currently unavailable.'));             
               
                  }
                }
              }
              else{
                  redirect('Admin_controller/login_page');
              }
        }
        /* product page */
        public function product_page(){
            if(isSession()){
                $data['display_category']=$this->am->display_category(); 
                $data['product_inventory']=$this->am->product_inventory();
                $data['product_discount']=$this->am->product_discount(); 
                // echo '<pre>';
                // print_r($data);
                // exit;        
                $this->load->view('admin/header/header');
                $this->load->view('admin/header/css');
                $this->load->view('admin/header/animation');
                $this->load->view('admin/header/nav');
                $this->load->view('admin/header/leftnav');
                $this->load->view('admin/main/product',$data);
                $this->load->view('admin/footer/footer');
                $this->load->view('admin/footer/js');
                $this->load->view('admin/footer/endhtml');
            }else{
                redirect('Admin_controller/login_page');
            }
        }
        /* product add */

       /*  public function product(){
            if(isSession()){
                $data['product_name'] = $this->input->post('product_name', true); 
                $data['prise'] = $this->input->post('product_prise', true); 
                $data['category_id'] = $this->input->post('product_category', true);
                $data['discount_id'] = $this->input->post('product_discount', true);
                $data['inventory_id'] = $this->input->post('product_quentity', true);
                // $data['product_image']=$this->input->post('product_image', true);
                $data['product_desc'] = $this->input->post('product_desc', true);  
                $data['product_created'] = date('d-m-y h:m:sa');
                // Validate product name
                $check_name = $this->am->product_name_check($data['product_name']);
                if (!empty($check_name)) {
                    echo json_encode(array('status' => 1, 'msg' => 'Sorry, the product name you entered already exists in our system'));             
                    return;
                } 
                
                // Validate product image
                $config['upload_path'] = '<?php echo base_url("assets/uploads/product_images/"); ?>';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 1024; // 2MB
                $config['max_width'] = 290;
                $config['max_height'] = 385;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            
                if (!$this->upload->do_upload('product_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    echo json_encode(array('status' => 4, 'msg' => $error['error']));             
                } else {
                    $data['product_image'] = $this->upload->data('file_name');
                }
            
                // Insert product data into database
                $product = $this->am->product($data);
                if ($product) {
                    echo json_encode(array('status' => 2, 'msg' => 'Congratulations! You have successfully created a new product'));             
                } else {
                    echo json_encode(array('status' => 3, 'msg' => 'Please try again later, as the service is currently unavailable.'));             
                }
            } else {
                redirect('Admin_controller/login_page');
            }
            
        }
        
 */

 public function product()
{
    if (isSession()) {
        $data['product_name'] = $this->input->post('product_name', true);
        $data['prise'] = $this->input->post('product_prise', true);
        $data['category_id'] = $this->input->post('product_category', true);
        $data['discount_id'] = $this->input->post('product_discount', true);
        $data['inventory_id'] = $this->input->post('product_quentity', true);
        $data['product_desc'] = $this->input->post('product_desc', true);
        $data['product_created'] = date('d-m-y h:m:sa');

        // Validate product name
        $check_name = $this->am->product_name_check($data['product_name']);
        if (!empty($check_name)) {
            echo json_encode(array('status' => 1, 'msg' => 'Sorry, the product name you entered already exists in our system'));
        }
        else{
        // Validate product image
        $config['upload_path'] ='./assets/uploads/product_images';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_image')) {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode(array('status' => 4, 'msg' =>$error));
        } 
        $data['product_image'] = $this->upload->data('file_name');
        // Insert product data into database
        $product = $this->am->product($data);
        if ($product) {
            echo json_encode(array('status' => 2, 'msg' => 'Congratulations! You have successfully created a new product'));
        } else {
            echo json_encode(array('status' => 3, 'msg' => 'Please try again later, as the service is currently unavailable.'));
        }
    }
    } else {
        redirect('Admin_controller/login_page');
    }

}





}



?>