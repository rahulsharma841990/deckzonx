<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('security');
		$this->load->library('session');
		$this->load->library('email');
	}
	
	function register(){
		$code=md5(mt_rand(5,15));
		if($this->check_email($this->input->post('email'))){
			$return=array('result'=>'false','error'=>'Email id already in use');
			return $return;
		}
		if($this->input->post('email')=="" and $this->input->post('password')==""){
			$return=array('result'=>'false','error'=>'email id and password required!');
			return $return;
		}
		$data=array(
				'user_first_name'=>xss_clean($this->input->post('fname')),
				'user_email_id'=>xss_clean($this->input->post('email')),
				'user_pass'=>xss_clean(md5($this->input->post('password'))),
				'user_gender'=>xss_clean($this->input->post('gender')),
				'reg_date'=>date('o-m-d'),
				'user_activate'=>0,
				'activate_code'=>$code,
				'status'=>'Active'
		);
		
		$profile_data=array(
							'email_id'=>xss_clean($this->input->post('email')),
							'gender'=>xss_clean($this->input->post('gender'))
		);
		$query2=$this->db->insert('userprofile',$profile_data);
		$query=$this->db->insert('nd_register',$data);
		$this->send_mail($this->input->post('email'),$code);
		if($query){
			$return=array('result'=>'true','error'=>'');
			return $return;
		}else{
			$return=array('result'=>'false','error'=>'Unable to procced');
			return $return;
		}
	}
	
	private function check_email($email){
		$query=$this->db->get_where('nd_register',array('user_email_id'=>$email));
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}
	
	private function send_mail($email,$code){
		$this->email->from('info@ndprivatelimited.com', 'ND Social Media');
		$this->email->to($email); 
		
		$this->email->subject('ND Social Media');
		$this->email->message('Thank you for register ND Social Media App, Click on the link to Activate your id: <a href="'.base_url().'user/activate/'.$code.'"></a>');	
		if($this->email->send()){
			return true;
		}else{
			return false;
		}
	}
	
	function user_activate($code){
		$data=array('user_activate'=>1,'activate_code'=>'');
		$this->db->where('activate_code',$code);
		$query=$this->db->update('nd_register',$data);
		if($query){
			$return=array('result'=>'true','error'=>'Your id is activated!');
			return $return;
		}else{
			$return=array('result'=>'false','error'=>"can't activate your id");
			return $return;
		}
	}
	
	function login_user(){
		$data=array(
					'user_email_id'=>xss_clean($this->input->post('user')),
					'user_pass'=>md5(xss_clean($this->input->post('password'))),
					'user_activate'=>1
		);
		$query=$this->db->get_where('nd_register',$data);
		if($query->num_rows()==1){
			$return=array('result'=>'true','error'=>'');
			$row=$query->row();
			$userdata=array(
								'user'=>$this->input->post('user'),
								'email'=>$row->user_email_id
						   );
			$this->session->set_userdata($userdata);
			return $return;
		}else{
			$return=array('result'=>'false','error'=>'Your id may not exist or activate');
			return $return;
		}
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