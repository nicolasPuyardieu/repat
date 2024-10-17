<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    public function index() {
        $this->load->view('header_view');
        $this->load->view('login_view');
    
       // $this->load->view('header');        


    }

    public function gestion_antecedentes() {
        redirect('GestionAntecedentesController');
    }

    public function listado_infractores() {
        redirect('ListadoInfractoresController');
    }

    public function listado_inhabilitaciones() {
        redirect('ListadoInhabilitacionesController');
    }

    public function cargaSentencias() {
        $this->load->view('header_view');
        $this->load->view('sentencias_carga_view');
        //redirect('CargaSentenciasController');
    }
    public function cargarInhabilitacion() {
        $this->load->view('header_view');
        $this->load->view('inhabilitaciones_carga_view');
        //redirect('CargaSentenciasController');
    }
    public function cargarInfractor() {
        $this->load->model('Infractores_model');
        $this->load->view('header_view');
        $data["localidades"] = $this->Infractores_model->lista_localidades();
        $this->load->view('infractores_carga_view', $data);
        //redirect('CargaSentenciasController');
    }
    public function listarInfractores() {
        $this->load->model('Infractores_model');
        $data['infractores'] = $this->Infractores_model->get_all_infractores();
        $this->load->view('header_view');
        $this->load->view('listadorebeldes_view', $data);

        //redirect('CargaSentenciasController');
    }
    public function listadoSentencias() {
        $this->load->model('Sentencias_model');
        $data['sentencias'] = $this->Sentencias_model->get_all_sentencias();
        $this->load->view('header_view');
        $this->load->view('sentencias_lista_view', $data);

        //redirect('CargaSentenciasController');
    }
    public function listadoInhabilitaciones() {
        $this->load->model('Inhabilitaciones_model');
        $data['inhabilitaciones'] = $this->Inhabilitaciones_model->get_all_inhabilitaciones();
        $this->load->view('header_view');
        $this->load->view('Inhabilitaciones_lista_view', $data);

        //redirect('CargaSentenciasController');
    }
    public function sentencias() {
        $this->load->view('header_view');
        $this->load->view('sentencias_view');
        //redirect('CargaSentenciasController');
    }
    public function inhabilitaciones() {
        $this->load->view('header_view');
        $this->load->view('inhabilitaciones_view');
        //redirect('CargaSentenciasController');
    }
    public function infractores() {
        $this->load->model('Infractores_model');
        $data['infractores'] = $this->Infractores_model->get_all_infractores();
        $this->load->view('header_view');
        $this->load->view('infractores_view');
        //$this->load->view('listadorebeldes_view', $data);

        //redirect('CargaSentenciasController');
    }


    //
    public function consultaAntecedentes() {
        $this->load->model('Infractores_model');
        $data['infractores'] = $this->Infractores_model->get_all_infractores();
        $this->load->view('header_view');
        $this->load->view('consultaantecedentes_view', $data);
        //redirect('CargaSentenciasController');
    }
    public function BuscarInfractor() {
        $this->load->model('Infractores_model');
        $data['infractores'] = $this->Infractores_model->get_all_infractores();
        $this->load->view('header_view');
        $this->load->view('consultaantecedentes_view', $data);
        //redirect('CargaSentenciasController');
    }
    public function filtrar_por_dni() {
        $dni = $this->input->get('dni');
        $this->load->model('Infractores_model');

        if ($dni) {
            $data['infractores'] = $this->Infractores_model->get_infractores_by_dni($dni);
        } else {
            $data['infractores'] = $this->Infractores_model->get_all_infractores();
        }

        $this->load->view('ListadoInfractoresDNI_view', $data);
    }
    public function filtrar() {
        $this->load->model('Infractores_model');
        $estado = $this->input->get('estado');
        $this->load->model('Infractores_model');
        if ($estado) {
            $data['infractores'] = $this->Infractores_model->get_infractores_by_estado($estado);
        } else {
            $data['infractores'] = $this->Infractores_model->get_all_infractores();
        }

        $this->load->view('ListadoRebeldes_view', $data);
    }

    public function misSentencias() {
        $this->load->view('header_view');
        $this->load->view('consultaantecedentes_view');
        //redirect('CargaSentenciasController');
    }
    public function usuarios(){
        $this->load->view("administradores_header");
        $this->load->view("gestion_usuarios_view")
    }


}
