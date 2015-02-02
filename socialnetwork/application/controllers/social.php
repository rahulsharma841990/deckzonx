<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class social extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		
	}


	public function index()
	{
		$this->load->view('social/template');
			
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
