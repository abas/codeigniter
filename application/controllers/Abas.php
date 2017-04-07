<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abas extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('abas_model');
    $this->load->helper('url_helper');
  }

	public function index()
	{
    $this->load->helper('form');
    $this->load->library('form_validation');



    $data['MHS'] = $this->abas_model->get_mhs();
    $data['title'] = 'Abas | Mahasiswa';
    $data['jumlah'] = $this->abas_model->jumlah_mhs();
    $data['status'] = $this->abas_model->status_mhs();

    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('nim','Nim','required');
    $this->form_validation->set_rules('kelompok','Kelompok','required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header',$data);
      $this->load->view('ex/abas',$data);
      $this->load->view('templates/footer',$data);
    }else{
      $this->abas_model->set_mhs();
      redirect('abas');
    }
  }

	public function update($id)
	{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('nim','Nim','required');
    $this->form_validation->set_rules('kelompok','Kelompok','required');

    if ($this->form_validation->run() === FALSE) {
      $data['MHS'] = $this->abas_model->get_mhs_id($id);
      $this->load->view('templates/header',$data);
      $this->load->view('ex/abas',$data);
      $this->load->view('templates/footer',$data);
    }else{
      $this->abas_model->set_mhs();
      redirect('index.php/abas');
    }
  }

}
