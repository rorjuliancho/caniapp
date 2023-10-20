<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Caniapp_model");
	}

	public function index()
	{
		$result['msg'] = "";
		$this->load->view('login/head');
		$this->load->view('login', $result);
		$this->load->view('login/footer');
	}

	public function singin()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$login = $this->Caniapp_model->login($user, $pass);

		if ($login) {
			if ($login[0]->idrol == 1) {
				$userLogin = array(
					'logueado' => TRUE,
					'idpadre_mascota' => $login[0]->idpadre_mascota,
					'nombre' => $login[0]->nombre,
					'apellido' => $login[0]->apellido,
					'idrol' => $login[0]->idrol,
				);
				$this->session->set_userdata($userLogin);
				redirect('Admin');
			} else {
				$userLogin = array(
					'logueado' => TRUE,
					'idpadre_mascota' => $login[0]->idpadre_mascota,
					'nombre' => $login[0]->nombre,
					'apellido' => $login[0]->apellido,
					'idrol' => $login[0]->idrol,
				);
				$this->session->set_userdata($userLogin);
				redirect('Cliente');
			}
		} else {
			$result['msg'] = "Por favor valide los datos ingresados";
			$this->load->view('login/head');
			$this->load->view('login', $result);
			$this->load->view('login/footer');
		}
	}

	public function logout()
	{
		$userLogin = array(
			'logueado' => FALSE
		);

		$this->session->set_userdata($userLogin);
		redirect('');
	}
}
