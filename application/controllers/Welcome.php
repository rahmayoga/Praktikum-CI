<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
      $this->load->model('model_pertama');

   //    $this->load->helper('url');
	 }

   // function index()
	// {
	// 	$data['datashop']=$this->model_pertama->getdata()->result();
   //    $this->load->view('v_model',$data);
   // }
   public function index()
   {
      $data = $this->model_pertama->getdata();
      $var_kirim =([
         'data_toko_kirim' => $data
      ]);
      $this->load->view('header');
      $this->load->view('welcome_message',$var_kirim);
      $this->load->view('footer');
   }
   public function say(){
      $this->load->view('nama_saya');
   }
}
			
