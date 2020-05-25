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
  public function cambia_con($usuario = null){
    $sql = "SELECT COUNT(*) cuenta FROM usuario WHERE USER='$usuario';";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function act_usuario($usuario=null,$nueva_con=null){
    $this->db->where('user',$usuario);
    $this->db->update('usuario',array('pass'=>$nueva_con));
    echo "Su contraseña ha sido actualizada correctamente";
    $this->load->view('view_iniciesesion');
  }
  public function MostrarUsuarios(){
    $sql = "SELECT u.id,u.correo,u.user,u.pass,r.nombre_rol,u.genero,u.fecha_nacimiento
   FROM usuario u, roles r 
   where u.id_rol=r.id_rol;";
    $query=$this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query;
    }else{
      return false;
    }
  }
  public function modificar($id=null){
    $sql = "SELECT u.id,u.correo,u.user,u.pass,r.nombre_rol,u.id_rol FROM usuario u, roles r where u.id_rol=r.id_rol and u.id='$id';";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function modificar_registro($id=null,$usuario=null,$correo=null,$contrasena=null,$rol=null){
    $sql = "UPDATE usuario SET user='$usuario',pass='$contrasena',id_rol='$rol',correo='$correo' WHERE id ='$id' ;";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  }
  public function eliminar_registro($id=null){
    $sql = "DELETE FROM usuario where id='$id'";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  }

}