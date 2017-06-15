<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginAdmin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_mAdmin');
	}

	function index()
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
	public function dataPengguna($username)
	{
		$this->db->select('username');
		$this->db->select('nama');
		$this->db->where('username', $username);
		$query = $this->db->get('admin');

		return $query->row();
	}

	function logout()	
	{
		$this->session->sess_destroy();	
		redirect(base_url().'LoginAdmin/');	
	}	
}