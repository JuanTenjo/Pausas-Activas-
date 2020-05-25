<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_contenido');
    }

	public function index()
	{
		$this->load->view('inicio');
    }
    public function contenido(){
        $titulo = $this->input->post('titulo');
        $nombre = $this->input->post('nombre');
        $contenido = $this->input->post('contenido');
        $re = $this->model_contenido->guardar_contenido($titulo,$contenido,$nombre);
    }
    public function mostrar_usuarios(){
        $id = $this->input->post('id');
        $re = $this->model_contenido->MostrarUsuario($id);
        $datos = array(
            'id_usuarios' => $re->id_usuarios,
            'correo' =>$re->correo,
            'nombre' => $re->nombre,
            'apellidos' => $re->apellidos,
            'id_rol' => $re->id_rol,
            'nombrerol' => $re->nombrerol,
            'contrasena' => $re->contraseña,
        );
        $this->load->view('view_editar_usuario',$datos);
    }
    public function modificar_usuario(){
		$id = $this->input->post("id");
		$nombre = $this->input->post("nombre");
		$correo = $this->input->post("correo");
		$apellidos = $this->input->post("apellidos");
		$contrasena = $this->input->post("contrasena");
		$rol = $this->input->post("rol");
		$mof = $this->model_contenido->modificar_usuario($id,$nombre,$correo,$contrasena,$rol,$apellidos);
    }
    public function eliminar_usuario(){
        $id = $this->input->post("id");
        $mof = $this->model_contenido->eliminar_usuario($id);
    }
    public function eliminar_contenido(){
        $id = $this->input->post("id");
        $mof = $this->model_contenido->eliminar_contenido($id);
    }
    public function mostrar_texto(){
        $id = $this->input->post("id");
        $re = $this->model_contenido->MostrarTexto($id);
        $datos = array(
            'id' => $re->idtextos,
            'titulo' =>$re->titulo,
            'texto' => $re->texto,
            'autor' => $re->autor,
        );
        $this->load->view('view_editar_contenido',$datos);
    }
    public function modificar_contenido(){
        $id = $this->input->post("id");
		$titulo = $this->input->post("titulo");
		$texto = $this->input->post("text");
		$autor = $this->input->post("autor");
        $mof = $this->model_contenido->modificar_contenido($id,$titulo,$texto,$autor);
        
    }
}
