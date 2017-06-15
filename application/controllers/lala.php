<?php	if	(	!	defined('BASEPATH'))	exit('No	direct	script	access	allowed');	
class	Login	extends	CI_Controller		
{		
	function	__construct()		
	{			
		parent::__construct();			
		$this->load->model('Auth_m');		
	}		
function	index()		
{			
	if($this->Auth_m->check_logged()===	true)				
		redirect(base_url().'Buku/');
	$sub_data['login_failed']	='';			
	$data['title']	=	'Login';			
	$data['body']	=	$this->load->view('login_v',$sub_data,	true);			
	if($this->input->post('submit_login'))	{				
		$this->form_validation->set_rules('username',	'username',	'trim| required');				
		$this->form_validation->set_rules('password',	'password',	'trim| required');				
		$this->form_validation->set_error_delimiters('<div	style="color:red;">',	'</div>');				
		if	($this->form_validation->run()	==	FALSE)	{					
			$data['body']	=	$this->load->view('login_v',$sub_data	,	true);					
			$this->load->view('output_html_v',	$data);				
		}	else	{					
			$login_array	=	array($this->input->post('username'),	
				$this->input->post('password'));
			if($this->Auth_m->process_login($login_array))	{

				login	successfull
				redirect(base_url().'Buku/');					
			}	else	{						
				$sub_data['login_failed']	=	"<div	style='color:red;'>Invalid	username	or	password</div>";
				$data['body']	=	$this->load->view('login_v', $sub_data	,	true);						
				$this->load->view('output_html_v',	$data);					
			}				
		}			
	}	else	{				
		$this->load->view('output_html_v',	$data);			
	}		
}		
function	logout()		
{			
	$this->session->sess_destroy();			
	redirect(base_url().'Login/');		
}	
}