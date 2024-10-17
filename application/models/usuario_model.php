<?php
class Usuario_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function insertar_usuario($usuario, $contraseña)
    {
        $data = array(
            'usuario' => $usuario,
            'contraseña' => password_hash($contraseña, PASSWORD_DEFAULT),
        );

        return $this->db->insert('usuarios', $data);
    }

    public function obtener_usuario($id)
    {
        $query = $this->db->get_where('usuarios', array('id' => $id));
        return $query->row_array();
    }

    public function actualizar_usuario($id, $usuario, $contraseña)
    {
        $data = array(
            'usuario' => $usuario,
            'contraseña' => password_hash($contraseña, PASSWORD_DEFAULT),
        );

        $this->db->where('id', $id);
        return $this->db->update('usuarios', $data);
    }

    public function eliminar_usuario($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('usuarios');
    }
    public function obtenerUsuarioPorNombre($usuario)
    {
        $this->db->where('nombre', $usuario);  // Usar $this->db->where() para construir la consulta
        $query = $this->db->get('usuarios');  // Ejecutar la consulta
        return $query->row_array();  
    }
    public function recupero_contrasenia($dni){
        if ($this->verificacion_dni($dni)) {
            $mail = $this->obtener_mail($dni);

            $this->load->library('email');  // Cargar la librería de correo

    // Configurar los parámetros del correo
            $this->email->from('repat.apsv@gmail.com', '');
            $this->email->to($mail);
            $this->email->subject('Recuperación de contraseña');
    
    // Mensaje del correo (HTML o texto)
            $message = '
            <p>Hola,</p>
            <p>Has solicitado restablecer tu contraseña. Haz clic en el enlace de abajo para restablecerla:</p>
            <p><a href=">Restablecer contraseña</a></p>
            <p>Si no solicitaste este cambio, por favor ignora este correo.</p>
            '   ;
    
            $this->email->message($message);

        // Enviar el correo
            if ($this->email->send()) {
                return true;
                } else {
                // Mostrar el error si no se envía el correo
                 show_error();
                  return false;
        }   
            
        }
    }
    public function verificacion_dni($dni){
        echo("verificacion dni");
        $res = $this->db->get_where('usuarios', array('dni' => $dni));
        echo( $dni);

        if ($res !== NULL) {
            // Si se encuentra un registro
            
            echo("sfswrwerwqte");
            return true; // Devuelve la fila
    }   else {
        // Si no hay registros
            echo("no encontro");
            return false;
        }
    }   
    public function obtener_mail($dni){
        $query = $this->db->get_where('usuarios', array('dni' => $dni));
        $fila = $query->row();
        echo($fila->email);
        return $fila->email;
    }
    public function comprobar_rol($id){
        $query = $this->db->get_where('usuarios', array('usuario_id' => $id));
        $fila = $query->row();
        return $fila->rol;
    }
    
}
