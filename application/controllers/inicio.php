<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_contenido');
	  }
	public function index()
	{
		$data['contenido'] = $this->model_contenido->mostrar_contenido();
		$this->load->view('view_home',$data);
	}
}
