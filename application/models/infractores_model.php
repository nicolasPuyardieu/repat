<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infractores_model extends CI_Model {

    public function __construct() {
        parent::__construct();
          $this->load->database();
    }

    // Obtener todos los infractores
    public function get_all_infractores() {
        $query = $this->db->get('infractores');
        return $query->result();
    }

    // Obtener un infractor por su ID
    public function get_infractores_by_id($id) {
        $query = $this->db->get_where('infractor', array('id' => $id));
        return $query->row();
    }
    public function get_infractores_by_dni($dni) {
        $query = $this->db->get_where('infractores', array('documento' => $dni));
        return $query->row();
    }

    // Insertar un nuevo infractor
    public function insert_infractor($data) {
        return $this->db->insert('infractor', $data);
    }

    // Actualizar un infractor existente
    public function update_infractor($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('infractor', $data);
    }

    // Eliminar un infractor
    public function delete_infractor($id) {
        $this->db->where('id', $id);
        return $this->db->delete('infractor');
    }
    //recordar 
    public function get_infractores_by_estado($estado) {
        $this->db->where('estado', $estado);
        $query = $this->db->get('infractores');
        return $query->result();
    }
    public function lista_localidades(){
        $query = $this->db->get("localidades");
        return $query->result();
    }
}