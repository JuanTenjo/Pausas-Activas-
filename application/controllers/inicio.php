<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_contenido');
		$this->load->model('model_inicio');
	  }
	public function index()
	{
		$this->load->view('view_home');
	}
	public function view_guia()
	{
		$data['contenido'] = $this->model_contenido->mostrar_contenido();
		$this->load->view('view_guia',$data);
	}
	public function editarperfil()
	{
		/*$data['contenido'] = $this->model_contenido->mostrar_contenido();*/
		$this->load->view('view_editar_perfil');
	}
	public function editarUser(){
		$id = $this->input->post("id");
		$nombre = $this->input->post("nombre");
		$correo = $this->input->post("correo");
		$apellidos = $this->input->post("apellidos");
		$contrasena = $this->input->post("contrasena");
		$mof = $this->model_inicio->modificar_usuario($id,$nombre,$correo,$contrasena,$apellidos);
		$this->session->sess_destroy();
    }
}
