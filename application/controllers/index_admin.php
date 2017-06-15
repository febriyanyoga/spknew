<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Auth_m');
	// }
	var $data = array() ;
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Auth_mAdmin']);
	}

	public function index()
	{

		if($this->Auth_mAdmin->check_logged() === false)  { 
			redirect(base_url().'index_admin/login'); 
		}else{
			// $data['tittle'] = "Medical Record - Home";
			// $this->data['query'] = $this->Buku_m->get_records(); 
			// $data['body'] = $this->load->view('buku_v', $this->data,  true);  
			// $this->load->view('index_user_v', $data); 

			$data['tittle'] = "Index Admin";
			$data['body'] = $this->load->view('index_admin_content', $this->data, true) ;
			$this->load->view('index_admin', $data);

		}
	}

	function login()
	{
		if($this->Auth_mAdmin->check_logged() === true)
			if ($this->session->userdata('level')=='admin'){
						redirect(base_url().'index_admin/');	
						// $data['pengguna'] = $this->session->userdata('username');
						// $name = $this->session->userdata('username');
					}else {
						redirect(base_url().'index_karyawan/');
						// $data['pengguna'] = $this->session->userdata('username');
						// $name = $this->session->userdata('username');
					}
			// redirect(base_url().'index_admin/');

		$sub_data['login_failed'] ='';
		$data['tittle'] = 'Login Admin';
		$data['body'] = $this->load->view('login_v_admin',$sub_data, true);
		if($this->input->post('submit_login')) {
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
			if ($this->form_validation->run() == FALSE) {
				$data['body'] = $this->load->view('login_v_admin',$sub_data ,true);
				$this->load->view('index_2', $data);
			}else {
				$login_array = array($this->input->post('username'), $this->input->post('password'));
				if($this->Auth_mAdmin->process_login($login_array))	{
					if ($this->session->userdata('level')=='admin'){
						redirect(base_url().'index_admin/');	
						// $data['pengguna'] = $this->session->userdata('username');
						// $name = $this->session->userdata('username');
					}else {
						redirect(base_url().'index_karyawan/');
						// $data['pengguna'] = $this->session->userdata('username');
						// $name = $this->session->userdata('username');
					}
				 	//login successfull	

				}else{	
					$sub_data['login_failed']="<div style='color:red;'>Invalid username or password</div>";	
					$data['body'] = $this->load->view('login_v_admin', $sub_data, true);	
					$this->load->view('index_2',	$data);
				}	
			}	
		}else{	
			$this->load->view('index_2', $data);	
		}


	}	

	function logout()	
	{
		$this->session->sess_destroy();	
		redirect(base_url().'LoginAdmin/');	
	}	

}
