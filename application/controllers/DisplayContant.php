<?php

class DisplayContant extends CI_Controller{
    public function __construct()
	{
	parent::__construct();
	}

   public function index(){
    $this->load->view('user/head/header');
    $this->load->view('user/head/css');
    $this->load->view('user/head/navbar');
    $this->load->view('user/body/main');
    $this->load->view('user/footer/footer');
    $this->load->view('user/footer/js');
    $this->load->view('user/footer/endhtml');
   }
   public function loginPage(){
    $this->load->view('user/head/header');
    $this->load->view('user/head/css');
    $this->load->view('user/head/navbar');
    $this->load->view('user/body/login');
    $this->load->view('user/footer/footer');
    $this->load->view('user/footer/js');
    $this->load->view('user/footer/endhtml');
   }
}

?>