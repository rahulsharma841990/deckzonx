<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class social_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('security');
		$this->load->library('session');
		$this->load->library('email');
	}
	
	
	function check_login(){
		if($this->session->userdata('user')==NULL || $this->session->userdata('user')==""){
			return false;
		}else{
			return true;
		}
	}
	
	function updateprofile(){
		$email=$this->session->userdata('email');
		$data=array(
					'username'=>$this->input->post('username'),
					'email_id'=>$this->input->post('email'),
					'dob'=>$this->input->post('dob'),
					'gender'=>$this->input->post('gender'),
					'address'=>$this->input->post('address'),
					'state'=>$this->input->post('state'),
					'street'=>$this->input->post('street'),
					'pincode'=>$this->input->post('pincode'),
					'city'=>$this->input->post('city'),
					'about_my_self'=>$this->input->post('aboutme'),
					'contact'=>$this->input->post('contact'),
		);
		$this->db->where('email_id',$email);
		$query=$this->db->update('userprofile',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	function get_user_profile(){
		$email=$this->session->userdata('email');
		$query=$this->db->get_where('userprofile',array('email_id'=>$email));
		return $query->row();
	}
	
}