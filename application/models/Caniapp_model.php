<?php defined('BASEPATH') or exit('No direct script access allowed');
class Caniapp_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


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

    public function insertarPadreMascota($data)
    {
        $this->db->insert('padre_mascota', $data);
    }

    public function insertarCanino($data)
    {
        $this->db->insert('paciente', $data);
    }


    public function last_id()
    {
        $this->db->select('idpadre_mascota');
        $this->db->order_by('idpadre_mascota', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('padre_mascota');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewInformacionCliente($id)
    {
        $this->db->select('*');
        $this->db->where('idpaciente', $id);
        $this->db->join('padre_mascota pm', 'pm.idpadre_mascota = p.id_padre');
        $query = $this->db->get('paciente p');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function insertarNotificacion($data)
    {
        $this->db->insert('notificaciones', $data);
    }

    public function insertarHistoria($data)
    {
        $this->db->insert('historial', $data);
    }

    public function  viewHistorialCliente($id)
    {
        $this->db->select('*');
        $this->db->where('id_paciente', $id);
        $query = $this->db->get('historial ');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function viewNotificacionCliente($idPadre)
    {
        $this->db->select('*');
        $this->db->where('id_padre', $idPadre);
        $query = $this->db->get('notificaciones ');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function allNotificaciones()
    {
        $this->db->select('*');
        $this->db->join('padre_mascota pm', 'pm.idpadre_mascota = n.id_padre');
        $this->db->join('paciente pc', 'pc.id_padre = pm.idpadre_mascota');
        $query = $this->db->get('notificaciones n');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function  findMascotaCliente($id_padre)
    {
        $this->db->select('*');
        $this->db->where('id_padre', $id_padre);
        $query = $this->db->get('paciente ');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
