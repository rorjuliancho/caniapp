<?php defined('BASEPATH') or exit('No direct script access allowed');
class Caniapp_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    /**
     *  Funcion de login de autenticación
     *
     */

    public function login($user, $password)
    {

        $this->db->select('*');
        $this->db->where('email', $user);
        $this->db->where('password', $password);
        $query = $this->db->get('padre_mascota');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function allPacientes()
    {
        $this->db->select('*');
        $query = $this->db->get('paciente');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function informacion()
    {
        $this->db->select('*');
        $this->db->where('estado !=', '1');
        $query = $this->db->get('guia');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function ultimoRegistro()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('guia');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function insertAllData($data)
    {
        $this->db->insert('guia', $data);
        return true;
    }

    public function updateAllData($data, $id)
    {
        $this->db->update('guia', $data);
        return true;
    }



    public function last_id()
    {
        $this->db->select('id');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('guia');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
