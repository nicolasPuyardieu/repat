<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index() {
        // Carga la vista de login 
        //$this->load->view('header_view');
        $this->load->view('login_view');
        $this->load->view('footer_view');
    }

    public function login() {
        $usuario = $this->input->post('usuario');
        $contraseña = $this->input->post('contraseña');
        echo $usuario;
         $user = $this->usuario_model->obtenerUsuarioPorNombre($usuario);

         if($usuario == $user['nombre'] && $contraseña == $user['contraseña'] ){
            redirect('maincontroller');
         }

    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('auth');
    }
    public function recuperar_contrasenia(){
        $dni = $this->input->post('dni');
        echo($dni);
        $mail = $this->input->post('mail');
        $this->usuario_model->recupero_contrasenia($dni, $mail);
        $this->post_recupero();

    }
    public function recupero(){
        $this->load->view("header_recupero");
        $this->load->view("recuperacion_view");
    }
    public function post_recupero(){
        echo("llego hasta la vista de recupero");
        $this->load->view("header_recupero");
        $this->load->view("post_recupero_view");
        //VISTA DESPUES DE LA RECUPERACION EXITOSA

    }
}
