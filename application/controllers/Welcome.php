<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');

	// 	$this->load->model('Auth_m');
	 }
	var $data = array();

	public function index()
	{
		$data['tittle'] = "Home";
		$data['body'] = $this->load->view('index_content', $this->data, true);
		$this->load->view('index', $data);
	}

	public function about()
	{
		$data['tittle'] = "About";
		$data['body'] = $this->load->view('about_content', $this->data, true);
		$this->load->view('index', $data);
	}
	public function contact()
	{
		$data['tittle'] = "Contact";
		$data['body'] = $this->load->view('contact_content', $this->data, true);
		$this->load->view('index',$data);
	}
}
