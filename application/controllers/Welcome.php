<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view($default_value = 'test')
	{
		$this->load->view('templates/header');
		$this->load->view('pages/'.$default_value);
		$this->load->view('templates/footer');
	}
}
