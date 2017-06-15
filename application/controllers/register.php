<?php if (!defined('BASEPATH')) exit('No direct script access allowed');	
class Register extends	CI_Controller
{	
	 function __construct()	
	 {	
	 	 parent :: __construct();	
		 $this->load->model(array('captcha_m', 'encrypt_m', 'auth_m', 'register_m'));	
	 }	
	 function index(){	
	 	 // if($this->auth_m->check_logged() === true)	
	 	 // 	redirect(base_url().'login/');	
	 	 $data['title'] = 'Register';	
	 	 $sub_data['captcha_return'] ='';	
	 	 $sub_data['cap_img'] = $this->captcha_m->make_captcha();	
	 	 if($this->input->post('submit'))	{	
	 	 	$this->form_validation->set_rules('id_ktp', 'id_ktp', 'trim|required');	
	 	 	 //$this->form_validation->set_rules('username', 'Username','trim|min_length[3]|max_length[20]|required|alpha_dash');
	 	 	 $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[50]|valid_email');
	 	 	 $this->form_validation->set_rules('password',	 'Password', 'trim|required|min_length[5]|max_length[50]|matches[passconf]');	
	 	 	 $this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required|min_length[5]|max_length[50]');
	 	 	 //$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[35]|valid_email');	
	 	 	 //$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');	
	 	 	 //$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'trim|required');	
	 	 	 $this->form_validation->set_rules('terms', 'Terms of Sevices','trim|required');	
	 	 	 $this->form_validation->set_rules('captcha','Captcha', 'required');	
	 	 	 $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');	
	 	 	 if	($this->form_validation->run() == FALSE) {	
		 	 	 $data['body'] = $this->load->view('register_v', $sub_data, true);	
	 	 	 } else {	
	 	 	 	 if($this->captcha_m->check_captcha()==TRUE)	{	
	 	 	 	 	 $id_ktp =$this->input->post('id_ktp');	
	 	 	 	 	 $email=$this->input->post('email');	
	 	 	 	 	 $password=$this->input->post('password');	
	 	 	 	 	 //$email=$this->input->post('email');	
	 	 	 	 	 //$alamat=$this->input->post('alamat');	
	 	 	 	 	 //$gender=$this->input->post('gender');	
	 	 	 	 	 $terms =$this->input->post('terms');	
		 	 	 	 $cek = $this->register_m->check_query('user',	$id_ktp);	
	 	 	 	 	 if	($cek == false)	{	
		 	 	 	 	 $rand_salt	= $this->encrypt_m->genRndSalt();	
	 	 	 	 	 	 $encrypt_pass = $this->encrypt_m->encryptUserPwd($this->input->post('password'), $rand_salt);	
	 	 	 	 	 $input_data=array(	 //input data array berupa nama, usernam, dll ke field db sesuai nama
	 	 	 	 	 	 	 'id_ktp'=>$id_ktp,	
	 	 	 	 	 	 	 //'username'=>$username,	
	 	 	 	 	 	 	 'email'=>$email,	
	 	 	 	 	 	 	 'password'=>$encrypt_pass,	
	 	 	 	 	 	 	 //'alamat' => $alamat,	
	 	 	 	 	 	 	 //'gender' => $gender,	
	 	 	 	 	 	 	 'salt' => $rand_salt,
	 	 	 	 	 	 	 //'level' => "user"	
	 	 	 	 	 	 	 );	
		 	 	 	 	 if($this->register_m->insert('user', $input_data)){	//jika berhasil input data langsung redirect ke halaman login
		 	 	 			// echo '<script language="javascript">';
							// echo 'alert("Register Sukses")';
							// echo '</script>';
	 	 	 	 	 	 	redirect(base_url().'login/');	
	 	 	 	 	 	 }else{
	 	 	 	 	 	 	$data['body']="error on query";	 //kalo tidak muncul tulisan "error on query"
	 	 	 	 	 	 }	
	 	 	 	 	 }else{
	 	 	 	 	 	 $sub_data['captcha_return'] = "<div style='color:red;'>username sudah ada, silahkan ubah</div><br/>";	//jika usernmae sudah digunakan muncul username sudah ada, silahkan ubah 
	 	 	 	 	 	 $data ['body']=$this->load->view('register_v',	$sub_data,	true);// me load variabel body ke register_V	
	
	 	 	 	 }	
	 	 	 	 } else {	
	 	 	 	 	 $sub_data [ 'captcha_return' ] = " <div style='color:red;'>Captcha tidak sesuai. Silahkan coba lagi.</div><br/>";	//jika captcha tidak sesuai muncul tulisan Captcha tidak sesuai. Silahkan coba lagi.
	 	 	 	 	 $data['body'] = $this->load->view('register_v', $sub_data,	true); // me load variabel body ke register_V		
	 	 	 	 }	
	 	 	 }	
	 	 }	else	{	
		 	 $data['body'] = $this->load->view('register_v', $sub_data, true);	
	 	 }	
	 	 $this->load->view('output_html_v',	$data);	
	 }	
}	