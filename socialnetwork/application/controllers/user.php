<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('user_model');
		$this->load->library('session');
	}


	public function index()
	{
		$this->load->view('user/pages/login');
			
	}
	
	
	public function registration()
	{
		$this->load->view('user/pages/registration');
	}
	
	public function dashboard()
	{
		$this->check_login();
		$data['user']=$this->user_model->get_user_profile();
		$this->load->view('user/template',$data);
	}
	
	
	function register(){
		if($this->input->server('REQUEST_METHOD')=="POST"){
			$return=$this->user_model->register();
			if($return['result']=='true'){
				redirect('user/success');
			}else{
				$this->session->set_flashdata('error',$return['error']);
				redirect('user/registration');
			}
		}else{
			redirect('user/registration');
		}
	}
	
	public function activate($code){
		$result=$this->user_model->user_activate($code);
		if($result['result']=="true"){
			$this->session->set_flashdata('error',$result['error']);
			redirect('user/index');
		}else{
			$this->session->set_flashdata('error',$result['error']);
			redirect('user/index');
		}
	}
	
	public function success()
	{
		$this->load->view('user/pages/emailconfirmation');
	}
	
	public function login(){
		$result=$this->user_model->login_user();
		if($result['result']=="true"){
			redirect('user/dashboard');
		}else{
			$this->session->set_flashdata('error',$result['error']);
			redirect('user/');
		}
	}
	
	private function check_login(){
		$result=$this->user_model->check_login();
		if(!$result){
			redirect('user/');
		}else{
			return true;
		}
	}
	
	public function logout(){
		$data=array('user'=>'','email'=>'');
		$this->session->set_userdata($data);
		$this->session->sess_destroy();
		redirect('user/');
	}
	
	public function update_profile(){
		$result=$this->user_model->updateprofile();
		if($result){
			echo "Done";
		}else{
			echo "Error";
		}
	}
}
