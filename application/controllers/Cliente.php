<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Caniapp_model");
    }

    public function index()
    {
        $id = $this->Caniapp_model->findMascotaCliente($this->session->userdata('idpadre_mascota'));
        $result['informacion'] = $this->Caniapp_model->viewInformacionCliente($id[0]->idpaciente);
        $result['historial'] = $this->Caniapp_model->viewHistorialCliente($id[0]->idpaciente);
        $result['notificacion'] = $this->Caniapp_model->viewNotificacionCliente($this->session->userdata('idpadre_mascota'));
        $medidas = $this->Caniapp_model->viewInformacionCliente($id[0]->idpaciente);

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

        $this->load->view('cliente/head');
        $this->load->view('cliente', $result);
        $this->load->view('cliente/footer');
    }


    public function medidascliente()
    {
        $this->load->view('cliente/head');
        $this->load->view('medidascliente');
        $this->load->view('cliente/footer');
    }

    public function nosotroscliente()
    {
        $this->load->view('cliente/head');
        $this->load->view('nosotroscliente');
        $this->load->view('cliente/footer');
    }

    public function cuidadoscliente()
    {
        $this->load->view('cliente/head');
        $this->load->view('cuidadoscliente');
        $this->load->view('cliente/footer');
    }

    public function encuestacliente()
    {
        $result['encuesta'] = $this->Caniapp_model->encuesta();
        $this->load->view('cliente/head');
        $this->load->view('encuestacliente', $result);
        $this->load->view('cliente/footer');
    }

    public function guardar_encuesta()
    {
        $idPadre = $this->session->userdata('idpadre_mascota');

        for ($i = 1; $i <= 5; $i++) {
            $data = array(
                'idPadre' => $idPadre,
                'idEncuesta' => $i,
                'respuesta' => $this->input->post('respuesta' . $i)
            );
            $this->Caniapp_model->guardarEncuesta($data);
        }
    }
}
