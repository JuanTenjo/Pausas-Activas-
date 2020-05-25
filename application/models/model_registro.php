<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Registro extends CI_Model{

  function __construct(){
    parent::__construct();
  }

  public function registro($nombre=null,$pass=null,$correo=null,$apellidos=null,$id_rol){
    $sql= "INSERT INTO usuarios(nombre,apellidos,contraseña,correo,id_rol) VALUES ('$nombre','$apellidos','$pass','$correo','$id_rol')";
    $query=$this->db->query($sql);
    echo "<script language='javascript'> alert('Registro Exitoso, ahora inicie sesion'); </script>";
    redirect("".base_url()."index.php/inicie_sesion/");
  }
}
