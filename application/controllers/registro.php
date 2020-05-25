<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_registro');
  }

	public function index()
	{
		$this->load->view('inicio');
	}
  public function registro(){
    $nombre=$this->input->post('nombre');
    $pass=$this->input->post('pass');
    $correo=$this->input->post('correo');
    $apellidos=$this->input->post('apellidos');
    $id_rol=$this->input->post('id_rol');

    $re = $this->model_registro->registro($nombre,$pass,$correo,$apellidos,$id_rol);
    echo "<script language='javascript'> alert('Registro Exitoso, ahora inicie sesion'); </script>";
  }
}
