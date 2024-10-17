<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentencia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sentencia_model');
    }

    // Listar todas las sentencias
    public function listadoSentencias() {
        $data['sentencias'] = $this->Sentencia_model->get_all_sentencias();
        $this->load->view('sentencias_lista_view', $data);
    }

    // Ver una sentencia específica
    public function view($sentenciaId) {
        $data['sentencia'] = $this->Sentencia_model->get_sentencia($sentenciaId);
        if (empty($data['sentencia'])) {
            show_404();
        }
        $this->load->view('sentencias/view', $data);
    }

    // Crear una nueva sentencia
    public function create() {
        $this->form_validation->set_rules('organoJuzgamiento', 'Organo de Juzgamiento', 'required|integer');
        $this->form_validation->set_rules('nroExpediente', 'Número de Expediente', 'required|integer');
        $this->form_validation->set_rules('fechaSentencia', 'Fecha de Sentencia', 'required');
        $this->form_validation->set_rules('fechaCarga', 'Fecha de Carga', 'required');
        $this->form_validation->set_rules('lugar', 'Lugar', 'required');
        $this->form_validation->set_rules('infractorId', 'ID del Infractor', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sentencias/create');
        } else {
            $data = array(
                'organoJuzgamiento' => $this->input->post('organoJuzgamiento'),
                'nroExpediente' => $this->input->post('nroExpediente'),
                'fechaSentencia' => $this->input->post('fechaSentencia'),
                'fechaCarga' => $this->input->post('fechaCarga'),
                'lugar' => $this->input->post('lugar'),
                'infractorId' => $this->input->post('infractorId')
            );

            $this->Sentencia_model->insert_sentencia($data);
            redirect('sentencia');
        }
    }

    // Editar una sentencia existente
    public function edit($sentenciaId) {
        $data['sentencia'] = $this->Sentencia_model->get_sentencia($sentenciaId);
        if (empty($data['sentencia'])) {
            show_404();
        }

        $this->form_validation->set_rules('organoJuzgamiento', 'Organo de Juzgamiento', 'required|integer');
        $this->form_validation->set_rules('nroExpediente', 'Número de Expediente', 'required|integer');
        $this->form_validation->set_rules('fechaSentencia', 'Fecha de Sentencia', 'required');
        $this->form_validation->set_rules('fechaCarga', 'Fecha de Carga', 'required');
        $this->form_validation->set_rules('lugar', 'Lugar', 'required');
        $this->form_validation->set_rules('infractorId', 'ID del Infractor', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sentencias/edit', $data);
        } else {
            $update_data = array(
                'organoJuzgamiento' => $this->input->post('organoJuzgamiento'),
                'nroExpediente' => $this->input->post('nroExpediente'),
                'fechaSentencia' => $this->input->post('fechaSentencia'),
                'fechaCarga' => $this->input->post('fechaCarga'),
                'lugar' => $this->input->post('lugar'),
                'infractorId' => $this->input->post('infractorId')
            );

            $this->Sentencia_model->update_sentencia($sentenciaId, $update_data);
            redirect('sentencia');
        }
    }

    public function delete($sentenciaId) {
        $this->Sentencia_model->delete_sentencia($sentenciaId);
        redirect('sentencia');
    }
    public function modificacion($id){
        $this->load->view("sentencia_modificacion_view");
    }

}