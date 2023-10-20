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

	public function view($id)
	{
		$result['informacion'] = $this->Caniapp_model->viewInformacionCliente($id);
		$result['historial'] = $this->Caniapp_model->viewHistorialCliente($id);

		$medidas = $this->Caniapp_model->viewInformacionCliente($id);
		$result['notificacion'] = $this->Caniapp_model->viewNotificacionCliente($medidas[0]->id_padre);
		$result['protesis'] = "";
		/* echo "peso" . ($medidas[0]->peso_canino) . '<br>';
		echo "tamaño" . ($medidas[0]->tamaño_canino) . '<br>';
		echo "cadera" . ($medidas[0]->ancho_cadera) . '<br>';
		echo "femur" . ($medidas[0]->altura_femur_suelo) . '<br>';
		echo "ingle" . ($medidas[0]->altura_ingle_suelo) . '<br>';
		echo "hombro" . ($medidas[0]->logintud_hombro_hombro) . '<br>';
		echo "pecho" . ($medidas[0]->circunferencia_pecho) . '<br>';
		echo "cuello" . ($medidas[0]->circunferencia_cuello) . '<br>'; */

		if (
			$medidas[0]->peso_canino >= 1 && $medidas[0]->peso_canino <= 15 &&
			$medidas[0]->tamano_canino < 33 &&
			$medidas[0]->ancho_cadera >= 1.5 &&  $medidas[0]->ancho_cadera <= 22.5 &&
			$medidas[0]->altura_femur_suelo >= 2.4 && $medidas[0]->altura_femur_suelo <= 36.25 &&
			$medidas[0]->altura_ingle_suelo >= 1.8 && $medidas[0]->altura_ingle_suelo <= 27.5 &&
			$medidas[0]->logintud_hombro_hombro >= 2.6 && $medidas[0]->logintud_hombro_hombro <= 40 &&
			$medidas[0]->circunferencia_pecho >= 4 && $medidas[0]->circunferencia_pecho <= 60 &&
			$medidas[0]->circunferencia_cuello >= 2.6 && $medidas[0]->circunferencia_cuello <= 39.3
		) {
			$result['protesis'] = "pequeño";
		} elseif (
			$medidas[0]->peso_canino > 15 && $medidas[0]->peso_canino <= 29 &&
			$medidas[0]->tamano_canino > 33 && $medidas[0]->tamano_canino <= 64 &&
			$medidas[0]->ancho_cadera >= 22.6 &&  $medidas[0]->ancho_cadera <= 43.5 &&
			$medidas[0]->altura_femur_suelo >= 36.26 && $medidas[0]->altura_femur_suelo <= 70.08 &&
			$medidas[0]->altura_ingle_suelo >= 27.6 && $medidas[0]->altura_ingle_suelo <= 53.16 &&
			$medidas[0]->logintud_hombro_hombro >= 41 && $medidas[0]->logintud_hombro_hombro <= 77.33 &&
			$medidas[0]->circunferencia_pecho >= 61 && $medidas[0]->circunferencia_pecho <= 116 &&
			$medidas[0]->circunferencia_cuello >= 36.4 && $medidas[0]->circunferencia_cuello <= 75.98
		) {
			$result['protesis'] = "mediano";
		} elseif (
			$medidas[0]->peso_canino >= 30 &&
			$medidas[0]->tamano_canino >= 65 &&
			$medidas[0]->ancho_cadera >= 43.6 &&
			$medidas[0]->altura_femur_suelo >= 70.09  &&
			$medidas[0]->altura_ingle_suelo >= 53.17  &&
			$medidas[0]->logintud_hombro_hombro >= 77.34 &&
			$medidas[0]->circunferencia_pecho >= 117  &&
			$medidas[0]->circunferencia_cuello >= 75.99
		) {
			$result['protesis'] = "grande";
		} else {
			$result['protesis'] = "error";
		}

		$this->load->view('main/head');
		$this->load->view('view', $result);
		$this->load->view('main/footer');
	}

	public function guardar_informacion()
	{
		$nombreCanino = $this->input->post('nombre_canino');
		$sexo = $this->input->post('sexo');
		$edad = $this->input->post('edad');
		$raza = $this->input->post('raza');
		$tamano = $this->input->post('tamano');
		$peso = $this->input->post('peso');

		$anchoCadera = $this->input->post('ancho_cadera');
		$alturaFemur = $this->input->post('altura_femur');
		$alturaIngle = $this->input->post('altura_ingle');
		$longitudHombro = $this->input->post('longitud_hombro');
		$circunferenciaPecho = $this->input->post('circunferencia_pecho');
		$circunferenciaCuello = $this->input->post('circunferencia_cuello');
		$observacione = $this->input->post('observaciones');

		$nombrePadreMascota = $this->input->post('nombre_padre');
		$apellidoPadreMascota = $this->input->post('apellido_padre');
		$direccion = $this->input->post('direccion');
		$telefono = $this->input->post('telefono');
		$email = $this->input->post('email');
		$cedula = $this->input->post('cedula');

		$file_name1 = $_FILES['evidenciauno']['name'];
		$file_name2 = $_FILES['fotodos']['name'];
		$file_name3 = $_FILES['adjuntotres']['name'];

		// Configura la ubicación donde se guardarán los archivos
		$config['upload_path'] = './paciente/';  // Asegúrate de que esta carpeta exista y sea escribible
		$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('evidenciauno')) {
			// Archivo subido correctamente
			$data = $this->upload->data();
			$file_name = $data['file_name'];
			$user_img_profileUno = $file_name;
			echo "El archivo '$file_name' se ha subido correctamente.";
		} else {
			$error = $this->upload->display_errors();
			echo "Error al subir el archivo: $error";
		}

		// Configura la ubicación donde se guardarán los archivos
		$config['upload_path'] = './paciente/';  // Asegúrate de que esta carpeta exista y sea escribible
		$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fotodos')) {
			// Archivo subido correctamente
			$data = $this->upload->data();
			$file_name = $data['file_name'];
			$user_img_profileDos = $file_name;
			echo "El archivo '$file_name' se ha subido correctamente.";
		} else {
			$error = $this->upload->display_errors();
			echo "Error al subir el archivo: $error";
		}

		// Configura la ubicación donde se guardarán los archivos
		$config['upload_path'] = './paciente/';  // Asegúrate de que esta carpeta exista y sea escribible
		$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('adjuntotres')) {
			// Archivo subido correctamente
			$data = $this->upload->data();
			$file_name = $data['file_name'];
			$user_img_profileTres = $file_name;
			echo "El archivo '$file_name' se ha subido correctamente.";
		} else {
			$error = $this->upload->display_errors();
			echo "Error al subir el archivo: $error";
		}

		/* 	$user_img_profileUno = $this->guardarImgUno($file_name1);
		$user_img_profileDos = $this->guardarImgDos($file_name2);
		$user_img_profileTres = $this->guardarImgTres($file_name3);
 */


		$dataPadreMascota = array(
			'nombre' => $nombrePadreMascota,
			'apellido' => $apellidoPadreMascota,
			'direccion' => $direccion,
			'telefono' => $telefono,
			'email' => $email,
			'cedula' => $cedula,
			'idrol' => 2,
			'password' => $cedula
		);

		$this->Caniapp_model->insertarPadreMascota($dataPadreMascota);
		$id_padre = $this->Caniapp_model->last_id();


		$dataCanino = array(
			'nombre_canino' => $nombreCanino,
			'sexo_canino' => $sexo,
			'edad_canino' => $edad,
			'raza_canino' => $raza,
			'tamano_canino' => $tamano,
			'peso_canino' => $peso,
			'ancho_cadera' => $anchoCadera,
			'altura_femur_suelo' => $alturaFemur,
			'altura_ingle_suelo' => $alturaIngle,
			'logintud_hombro_hombro' => $longitudHombro,
			'circunferencia_pecho' => $circunferenciaPecho,
			'circunferencia_cuello' => $circunferenciaCuello,
			'observaciones' => $observacione,
			'img_uno' => $user_img_profileUno,
			'img_dos' => $user_img_profileDos,
			'img_tres' => $user_img_profileTres,
			'id_padre' => $id_padre[0]->idpadre_mascota,
		);

		$this->Caniapp_model->insertarCanino($dataCanino);

		$result['msg'] = "Se ha creado el paciente";
		$result['paciente'] = $this->Caniapp_model->allPacientes();
		$this->load->view('main/head');
		$this->load->view('admin', $result);
		$this->load->view('main/footer');
	}


	public function guardarImgUno($imgUno)
	{

		$file_name1 = $imgUno;

		if (empty($file_name1)) {
		} else {
			// Configura la ubicación donde se guardarán los archivos
			$config['upload_path'] = './paciente/';  // Asegúrate de que esta carpeta exista y sea escribible
			$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('cargaUno')) {
				// Archivo subido correctamente
				$data = $this->upload->data();
				$file_name = $data['file_name'];

				//echo "El archivo '$file_name' se ha subido correctamente.";
			} else {
				$error = $this->upload->display_errors();
				echo "Error al subir el archivo: $error";
			}
		}
		return $file_name1;
	}

	public function guardarImgDos($imgDos)
	{
		$file_name2 = $imgDos;
		if (empty($file_name2)) {
		} else {

			// Configura la ubicación donde se guardarán los archivos
			$config['upload_path'] = './paciente/evidenciados';  // Asegúrate de que esta carpeta exista y sea escribible
			$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('evidenciados')) {
				// Archivo subido correctamente
				$data = $this->upload->data();
				$file_name = $data['file_name'];

				//echo "El archivo '$file_name' se ha subido correctamente.";
			} else {
				$error = $this->upload->display_errors();
				echo "Error al subir el archivo: $error";
			}
		}
		return $file_name;
	}

	public function guardarImgTres($imgTres)
	{
		$file_name3 = $imgTres;

		if (empty($file_name3)) {
		} else {

			// Configura la ubicación donde se guardarán los archivos
			$config['upload_path'] = './paciente/evidenciatres';  // Asegúrate de que esta carpeta exista y sea escribible
			$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('fotografiatres')) {
				// Archivo subido correctamente
				$data = $this->upload->data();
				$file_name = $data['file_name'];

				//echo "El archivo '$file_name' se ha subido correctamente.";
			} else {
				$error = $this->upload->display_errors();
				echo "Error al subir el archivo: $error";
			}
		}

		return $file_name;
	}

	public function notification($id)
	{
		$result['idPaciente']  = $id;
		$this->load->view('main/head');
		$this->load->view('notificaciones', $result);
		$this->load->view('main/footer');
	}

	public function guardar_notificacion()
	{
		date_default_timezone_set("America/Bogota");
		$fechaCreacion = date('Y-m-d H:i:s');
		$result['msg'] = "Se ha creado la notificación";
		$idPaciente = $this->input->post('idPaciente');
		$notificacion = $this->input->post('notificacion');
		$result['paciente'] = $this->Caniapp_model->allPacientes();
		$idPadre = $this->Caniapp_model->viewInformacionCliente($idPaciente);

		$data = array(
			'notificacion' => $notificacion,
			'id_padre' => $idPadre[0]->id_padre,
			'fecha_notificacion' => $fechaCreacion,
		);

		$this->Caniapp_model->insertarNotificacion($data);

		$this->load->view('main/head');
		$this->load->view('admin', $result);
		$this->load->view('main/footer');
	}

	public function cuidado()
	{
		$this->load->view('main/head');
		$this->load->view('cuidados');
		$this->load->view('main/footer');
	}

	public function historial($id)
	{
		$result['idPaciente']  = $id;
		$this->load->view('main/head');
		$this->load->view('historial', $result);
		$this->load->view('main/footer');
	}

	public function guardar_historia()
	{
		$result['msg'] = "Se ha creado la historia clínica";
		$idPaciente = $this->input->post('idPaciente');
		$historia = $this->input->post('historia');
		$fecha = $this->input->post('fecha');
		$result['paciente'] = $this->Caniapp_model->allPacientes();

		$data = array(
			'id_paciente' => $idPaciente,
			'observaciones' => $historia,
			'fecha_visita' => $fecha,
		);

		$this->Caniapp_model->insertarHistoria($data);

		$this->load->view('main/head');
		$this->load->view('admin', $result);
		$this->load->view('main/footer');
	}

	public function viewNotificacion()
	{
		$result['allNotificacion'] = $this->Caniapp_model->allNotificaciones();
		$this->load->view('main/head');
		$this->load->view('allnotificaciones', $result);
		$this->load->view('main/footer');
	}

	public function pruebas()
	{
		$this->load->view('main/head');
		$this->load->view('pruebas');
		$this->load->view('main/footer');
	}

	public function imagenes()
	{
		// Configura la ubicación donde se guardarán los archivos
		$config['upload_path'] = './paciente/evidenciauno';  // Asegúrate de que esta carpeta exista y sea escribible
		$config['allowed_types'] = '*';  // Permitir cualquier tipo de archivo

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('cargaUno')) {
			// Archivo subido correctamente
			$data = $this->upload->data();
			$file_name = $data['file_name'];
			echo $file_name;

			echo "El archivo '$file_name' se ha subido correctamente.";
		} else {
			$error = $this->upload->display_errors();
			echo "Error al subir el archivo: $error";
		}


		/* 	$p1 = $this->input->post('cargaUno');
		$p2 = $this->input->post('evidenciados');
		$p3 = $this->input->post('fotografiatres'); */

		/* 	$r = $this->guardarImgUno($file_name1);
		$t = $this->guardarImgDos($file_name2);
		$y = $this->guardarImgTres($file_name3);
 */
	}
}
