<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
	}

	function index()
	{
		if($this->Auth_m->check_logged() === true)
			// if ($this->session->userdata('level')=='admin'){
			// 			redirect(base_url().'index_admin/');	
			// 			// $data['pengguna'] = $this->session->userdata('username');
			// 			// $name = $this->session->userdata('username');
			// 		}else {
			// 			redirect(base_url().'index_user/');
			// 			// $data['pengguna'] = $this->session->userdata('username');
			// 			// $name = $this->session->userdata('username');
			// 		}
			redirect(base_url().'index_user/');

		$sub_data['login_failed'] ='';
		$data['tittle'] = 'Login';
		$data['body'] = $this->load->view('login_v',$sub_data, true);
		if($this->input->post('submit_login')) {
			$this->form_validation->set_rules('id_ktp', 'id_ktp', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
			if ($this->form_validation->run() == FALSE) {
				$data['body'] = $this->load->view('login_v',$sub_data ,true);
				$this->load->view('index_2', $data);
			}else {
				$login_array = array($this->input->post('id_ktp'), $this->input->post('password'));
				if($this->Auth_m->process_login($login_array))	{
					// if ($this->session->userdata('level')=='admin'){
					// 	redirect(base_url().'index_admin/');	
					// 	// $data['pengguna'] = $this->session->userdata('username');
					// 	// $name = $this->session->userdata('username');
					// }else {
						redirect(base_url().'index_user/');
					// 	// $data['pengguna'] = $this->session->userdata('username');
					// 	// $name = $this->session->userdata('username');
					// }
				 	//login successfull	

				}else{	
					//redirect(base_url().'index_user/');
					$sub_data['login_failed']="<div style='color:red;'>No KTP atau password salah . . .</div>";	
					$data['body'] = $this->load->view('login_v', $sub_data, true);	
					$this->load->view('index_2',	$data);
				}	
			}	
		}else{	
			$this->load->view('index_2', $data);	
		}

	}	
	public function dataPengguna($id_ktp)
	{
		$this->db->select('id_ktp');
		$this->db->select('email');
		$this->db->where('id_ktp', $id_ktp);
		$query = $this->db->get('user');

		return $query->row();
	}

	function logout()	
	{
		$this->session->sess_destroy();	
		redirect(base_url().'Login/');	
	}	
}