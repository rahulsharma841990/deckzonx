<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class social extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('social_model');
	}


	public function index()
	{
		$data['profile']=$this->social_model->get_user_profile();
		$this->load->view('social/template',$data);
	}
	
	
	public function registration()
	{
		$this->load->view('social/pages/registration');
	}
	
	public function dashboard()
	{
		$this->load->view('social/template');
	}
	
	
	
	
}
