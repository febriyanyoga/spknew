<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');	
class Auth_mAdmin extends CI_Model
{	
	 private $table_name = 'admin';	
	 function __construct()	
	 {	
	 	 parent :: __construct();	
	 	 $this->load->model(array('Encrypt_m'));	
	 }	
	 function process_login($login_array_input = NULL)	{	
	 	 if(!isset($login_array_input) OR count($login_array_input) != 2)	
	 	 	 return	false;
	 	 	 //set	its	variable	
	 	 	 $username = $login_array_input[0];	
	 	 	 $password = $login_array_input[1];	
	 	 	 //	select	data	from	database	to	check	user	exist	or	not?	
	 	 	 $this->db->where('username', $username);	
	 	 	 $this->db->limit(1);
	 	 	 $query = $this->db->get('admin');	
	 	 	 if	($query->num_rows() > 0) {	
	 	 	 	 $row = $query->row();	
	 	 	 	 $nama = $row->nama;
	 	 	 	 // $username = $row->username;
	 	 	 	 $id_admin = $row->id_admin;
	 	 	 	 $email = $row->email ;
	 	 	 	 $user_pass = $row->password;
	 	 	 	 $level = $row->level;	
	 	 	 	 $user_salt = $row->salt;		
	 	 	 	 if($this->Encrypt_m->encryptUserPwd($password, $user_salt) === $user_pass)	{	
		 	 	 	 $this->session->set_userdata('logged_user', $id_admin);	
	 	 	 	 	 $this->session->set_userdata('nama', $nama);	
	 	 	 	 	 $this->session->set_userdata('email', $email);
	 	 	 	 	 // $this->session->set_userdata('username', $username);
	 	 	 	 	 // $this->session->set_userdata('alamat', $alamat);
	 	 	 	 	 //$this->session->set_userdata('alamat', $alamat);
	 	 	 	 	 // $this->session->set_userdata('gender', $gender);
	 	 	 	 	 $this->session->set_userdata('level', $level);	
	 	 	 	 	 return	true;	
	 	 	 	 }	
	 	 	 	 return	false;	
	 	 	 }	
	 	 return	false;	
	 }	
	 function check_logged(){	
	 	 return	($this->session->userdata('logged_user'))? TRUE:FALSE;	
	 }	
	 function logged_id(){
		 return	($this->check_logged())? $this->session->userdata('logged_user'):'';	
	 }	
}	