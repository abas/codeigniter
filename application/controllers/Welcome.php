<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/test');
		$this->load->view('templates/footer');
	}
}
