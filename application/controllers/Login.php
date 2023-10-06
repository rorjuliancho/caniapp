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
		$this->load->view('login/head');
		$this->load->view('login');
		$this->load->view('login/footer');
	}

	public function singin()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');



		if ($user == 'caniapp@gmail.com' && $pass = '123') {
			redirect('admin/home');
		} else {
			redirect('');
		}




		//$login = $this->Caniapp_model->login($user, $pass);

		/* if ($login) {
			if ($login[0]->tipoUsuario == "Colaborador") {
				$userLogin = array(
					'logueado' => TRUE,
					'idUser' => $login[0]->idcolaborador,
					'nombre' => $login[0]->nombre,
					'apellido' => $login[0]->apellido,
					'cargo' => $login[0]->cargo,
					'tipoUsuario' => $login[0]->tipoUsuario
				);
				$this->session->set_userdata($userLogin);
				redirect('Welcome/main');
			} else {
				$userLogin = array(
					'logueado' => TRUE,
					'idUser' => $login[0]->idcolaborador,
					'nombre' => $login[0]->nombre,
					'apellido' => $login[0]->apellido,
					'cargo' => $login[0]->cargo,
					'tipoUsuario' => $login[0]->tipoUsuario
				);
				$this->session->set_userdata($userLogin);
				redirect('Welcome/admin');
			}
		} */
	}
}
