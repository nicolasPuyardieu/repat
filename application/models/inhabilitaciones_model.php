<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inhabilitaciones_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insertar una nueva inhabilitación
    public function insert_inhabilitacion($data) {
        $this->db->insert('inhabilitaciones', $data);
        return $this->db->insert_id();  // Devuelve el ID del último registro insertado
    }

    // Obtener todas las inhabilitaciones
    public function get_all_inhabilitaciones() {
        $query = $this->db->get('inhabilitaciones');
        return $query->result();
    }

    // Obtener una inhabilitación por ID
    public function get_inhabilitacion_by_id($id) {
        $query = $this->db->get_where('inhabilitaciones', array('id' => $id));
        return $query->row();
    }

    // Actualizar una inhabilitación
    public function update_inhabilitacion($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('inhabilitaciones', $data);
    }

    // Eliminar una inhabilitación
    public function delete_inhabilitacion($id) {
        $this->db->where('id', $id);
        return $this->db->delete('inhabilitaciones');
    }
}
