<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Caniapp_model");
	}

	public function index()
	{
		$result['msg'] = '';
		$result['paciente'] = $this->Caniapp_model->allPacientes();
		$this->load->view('main/head');
		$this->load->view('admin', $result);
		$this->load->view('main/footer');
	}


	public function new()
	{
		$this->load->view('main/head');
		$this->load->view('new');
		$this->load->view('main/footer');
	}

	public function medidas()
	{
		$this->load->view('main/head');
		$this->load->view('medidas');
		$this->load->view('main/footer');
	}

	public function notificaciones()
	{
		$this->load->view('main/head');
		$this->load->view('notificaciones');
		$this->load->view('main/footer');
	}

	public function nosotros()
	{
		$this->load->view('main/head');
		$this->load->view('nosotros');
		$this->load->view('main/footer');
	}
}
