<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infractor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Infractor_model');
    }

    public function index() {
        $data['infractores'] = $this->Infractor_model->get_all_infractores();
        $this->load->view('infractor_list', $data);
    }

    public function view($id) {
        $data['infractor'] = $this->Infractor_model->get_infractor_by_id($id);
        $this->load->view('infractor_view', $data);
    }

    /*public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_validation->set_rules('documento', 'Documento', 'required|numeric');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('fechaNac', 'Fecha de Nacimiento', 'required');
            $this->form_validation->set_rules('contacto', 'Contacto', 'required|valid_email');
            $this->form_validation->set_rules('estado', 'Estado', 'required|integer');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('infractor_form');
            } else {
                $data = array(
                    'documento' => $this->input->post('documento'),
                    'apellido' => $this->input->post('apellido'),
                    'nombre' => $this->input->post('nombre'),
                    'fechaNac' => $this->input->post('fechaNac'),
                    'contacto' => $this->input->post('contacto'),
                    'estado' => $this->input->post('estado')
                );

                $this->Infractor_model->insert_infractor($data);
                redirect('infractor');
            }
        } else {
            $this->load->view('infractor_form');
        }
        completar con lista de localidades
       
    }*/

    public function edit($id) {
        $data['infractor'] = $this->Infractor_model->get_infractor_by_id($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_validation->set_rules('documento', 'Documento', 'required|numeric');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('fechaNac', 'Fecha de Nacimiento', 'required');
            $this->form_validation->set_rules('contacto', 'Contacto', 'required|valid_email');
            $this->form_validation->set_rules('estado', 'Estado', 'required|integer');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('infractor_form', $data);
            } else {
                $data = array(
                    'documento' => $this->input->post('documento'),
                    'apellido' => $this->input->post('apellido'),
                    'nombre' => $this->input->post('nombre'),
                    'fechaNac' => $this->input->post('fechaNac'),
                    'contacto' => $this->input->post('contacto'),
                    'estado' => $this->input->post('estado')
                );

                $this->Infractor_model->update_infractor($id, $data);
                redirect('infractor');
            }
        } else {
            $this->load->view('infractor_form', $data);
        }
    }

    public function delete($id) {
        $this->Infractor_model->delete_infractor($id);
        redirect('infractor');
    }
       public function list_estado_3() {
        $data['infractores'] = $this->Infractor_model->get_infractores_by_estado(3);
        $this->load->view('header_view');
        $this->load->view('listadorebeldes_view', $data);
    }
    public function modificar($id){
        $this->load->view("infractor_modificacion_view");
    }
}