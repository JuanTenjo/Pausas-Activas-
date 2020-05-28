<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicie_Sesion extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_inicio');
		$this->load->model('model_contenido');
	}
	public function index()
	{
		$this->load->view('view_login');
	}
	public function cargarcontactos()
	{
		$this->load->view('view_contacto');
	}
	public function eliminarsesion()
	{
		$this->session->sess_destroy();
		$this->load->view('view_login');
	}
	
	public function carga_admin()
	{
		if ($this->session->userdata('is_logged_in')) {
			$data = array( 
				'contenido' => $this->model_contenido->mostrar_contenido(),
				'usuarios' =>  $this->model_contenido->mostrar_usuarios()
			);
			$this->load->view('view_admin',$data);
		}
	}
	public function carga_usuario()
	{
		if ($this->session->userdata('is_logged_in')) {
			$data = array(
				'contenido' =>  $this->model_contenido->mostrar_contenido(),
				'nombre' => $this->session->userdata('NOMBRE')
			);
			$this->load->view('view_home',$data);
		}
	}
	public function inicio(){
		$correo=$this->input->post('correo');
		$contrasena=$this->input->post('contrasena');

		$re = $this->model_inicio->inicio($correo,$contrasena);
		if($re->cuenta == 1){
			$result = $this->model_inicio->con_usuario($correo,$contrasena);
			//echo "correcto";
			$session = array(
				'ID' => $result->id_usuarios,
				'NOMBRE' => $result->nombre,
				'APELLIDOS' => $result->apellidos,
				'CONTRASENA' => $result->contraseña,
				'CORREO' => $result->correo,
				'ROL' => $result->nombrerol,
				'is_logged_in' => TRUE,
			);
			$this->session->set_userdata($session);
			if ($result->nombrerol == "sinAsignar") {
					echo "'<b>'Espera que el Administrador le asigne un Servicio'</b>''";
			}
			elseif ($result->nombrerol == "admin") {
				if ($this->session->userdata('is_logged_in')) {
					redirect("".base_url()."index.php/inicie_sesion/carga_admin");
				}
			}elseif ($result->nombrerol == "usuario") {
				if ($this->session->userdata('is_logged_in')) {
					redirect("".base_url()."index.php/inicie_sesion/carga_usuario");
				}
			}
		}else{
			echo "<script>alert('contraseña o correo incorrectos');</script>";
			$this->load->view('view_login');
		}
	}
}
