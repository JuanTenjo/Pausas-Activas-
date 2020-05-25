<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Mesero extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_pedidos');
        $this->load->model('model_mostrar_productos');
    }
public function mesa()
	{   
        $pre = $this->model_pedidos->registro_precio();
        $mesero = $this->session->userdata('USUARIO');
        $mesa = $this->input->post("mesa");
        $num_pedido = $this->input->post("pedido");
        $mesa = array(
            'mesa' => $mesa,
            'pedido' => $num_pedido
        );
        $data = array(
            'burger' => $this->model_mostrar_productos->MostrarBurger(),
            'perro' => $this->model_mostrar_productos->MostrarPerro(),
            'otros' => $this->model_mostrar_productos->MostrarOtros(),
            'limonadas' => $this->model_mostrar_productos->MostrarLimonadas(),
            'malteadas' => $this->model_mostrar_productos->MostrarMalteadas(),
            'cervesas' => $this->model_mostrar_productos->MostrarCervesas(),
            'cubano' => $this->model_mostrar_productos->MostrarCubano(),
            'adiciones' => $this->model_mostrar_productos->MostrarAdiciones(),
            'pedido' => $this->model_pedidos->registro_general_terminado($mesero),
        );
        $this->session->set_userdata($mesa);
        $this->load->view('view_producto',$data);
    }
public function eliminar_registro(){
    $id = $this->input->post("id");
    $eli = $this->model_pedidos->eliminar_pedido($id);
}
public function confirmarpedido(){
    $num_pedido = $this->input->post("num_pedido");
    $confirmar = $this->model_pedidos->confirmar_pedido($num_pedido);
    $eliminar = $this->model_pedidos->eliminar_pedidos($num_pedido);
}
public function recargar(){
    $pre = $this->model_pedidos->registro_precio();
    $mesero = $this->session->userdata('USUARIO');
    $data = array(
        'burger' => $this->model_mostrar_productos->MostrarBurger(),
        'perro' => $this->model_mostrar_productos->MostrarPerro(),
        'otros' => $this->model_mostrar_productos->MostrarOtros(),
        'limonadas' => $this->model_mostrar_productos->MostrarLimonadas(),
        'malteadas' => $this->model_mostrar_productos->MostrarMalteadas(),
        'cervesas' => $this->model_mostrar_productos->MostrarCervesas(),
        'cubano' => $this->model_mostrar_productos->MostrarCubano(),
        'adiciones' => $this->model_mostrar_productos->MostrarAdiciones(),
        'pedido' => $this->model_pedidos->registro_general_terminado($mesero),
    );
    $this->load->view('view_producto',$data);
}
public function general(){
    $producto = $this->input->post('producto');
    $tipo_producto = $this->input->post('tipo_producto');
    $adiciones = $this->input->post('adiciones'); 
    $mesa = $this->input->post('mesa');
    $pan = $this->input->post('pan');
    $observaciones = $this->input->post('observaciones');
    $cantidad = $this->input->post('cantidad');
    $mesero = $this->input->post('mesero');
    $num_pedido = $this->input->post('num_pedido');
    date_default_timezone_set("America/Bogota");
    $fecha_actual=date("Y/m/d/g/i/s");
    $re = $this->model_pedidos->registro_general($producto,$tipo_producto,$adiciones,$observaciones,$cantidad,$mesa,$mesero,$pan,$fecha_actual,$num_pedido);
}
public function volver_mesa(){
    $this->load->view('view_mesero');
}
public function salir(){
    $this->load->view('inicio');
}
}
?>