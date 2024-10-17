<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentencias_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Obtener todas las sentencias
    public function get_all_sentencias() {
        $query = $this->db->get('sentencias');
        return $query->result();
    }

    // Obtener una sentencia por ID
    public function get_sentencia($sentenciaId) {
        $this->db->where('sentenciaId', $sentenciaId);
        $query = $this->db->get('sentencias');
        return $query->row();
    }

    // Insertar una nueva sentencia
    public function insert_sentencia($data) {
        return $this->db->insert('sentencias', $data);
    }

    // Actualizar una sentencia
    public function update_sentencia($sentenciaId, $data) {
        $this->db->where('sentenciaId', $sentenciaId);
        return $this->db->update('sentencias', $data);
    }

    // Eliminar una sentencia
    public function delete_sentencia($sentenciaId) {
        $this->db->where('sentenciaId', $sentenciaId);
        return $this->db->delete('sentencias');
    }
    public function lista_localidades(){
        $query = $this->db->get("localidades");
        return $query->result();
    }
}