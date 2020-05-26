<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Inicio extends CI_Model {

  function __construct(){
    parent::__construct();
  }
  public function inicio($correo = null, $contrasena=null){
    $sql = "SELECT COUNT(*) cuenta FROM usuarios WHERE correo='$correo' AND contraseña='$contrasena';";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function con_usuario($correo = null, $contrasena=null){
    $sql = "SELECT u.id_usuarios, u.nombre,u.contraseña, r.nombrerol, u.correo FROM usuarios u, roles r
    WHERE u.id_rol = r.idroles
    AND u.correo='$correo' AND u.contraseña='$contrasena';";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function eliminar_registro($id=null){
    $sql = "DELETE FROM usuario where id='$id'";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  }

}