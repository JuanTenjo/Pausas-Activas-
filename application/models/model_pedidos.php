<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pedidos extends CI_Model {
    function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('welcome_message');
  }
      public function registro_general($producto=null,$tipo_producto=null,$adiciones=null,$observaciones=null,$cantidad=null,$mesa=null,$mesero=null,$pan,$fecha_actual,$num_pedido=null){
        $sql= "INSERT INTO pedidos(producto,tipo,pan,observaciones,cantidad,mesa,mesero,fecha_ingreso,num_pedido) VALUES ('$producto','$tipo_producto','$pan','$observaciones','$cantidad','$mesa','$mesero','$fecha_actual','$num_pedido')";
        $query=$this->db->query($sql);
        redirect("".base_url()."index.php/mesero/recargar");
      }
      public function registro_general_terminado($mesero=null){
        $query = $this->db->query("SELECT * FROM pedidos p where p.mesero='$mesero';");
        return $query;
        
      }
      public function eliminar_pedido($id = null){
       $sql ="DELETE FROM pedidos WHERE id='$id';"; 
       $query=$this->db->query($sql);
       redirect("".base_url()."index.php/mesero/recargar");
      }
      public function registro_precio(){
        $sql = " UPDATE pedidos 
        SET precio = (SELECT p.precio*pedidos.cantidad FROM productos p WHERE pedidos.tipo = p.nombre)";
        $query=$this->db->query($sql);
      }
      public function confirmar_pedido($num_pedido=null){
        $sql = "CALL confirmar_pedidos('$num_pedido');";
        $query=$this->db->query($sql);
      }
      public function eliminar_pedidos($num_pedido=null){
        $sql = "CALL eliminar_pedido('$num_pedido');";
        $query=$this->db->query($sql);
        redirect("".base_url()."index.php/mesero/recargar");
      }
      public function MostrarPedidos(){
        $query = $this->db->query("SELECT * FROM pedidos_confirmados;");
        return $query;
      }
}

