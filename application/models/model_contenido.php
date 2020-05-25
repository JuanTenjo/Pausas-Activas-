<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Contenido extends CI_Model {
  function __construct(){
    parent::__construct();
  }

  public function guardar_contenido($titulo=null,$contenido=null,$nombre=null){
    $sql= "INSERT INTO textos(titulo,texto,autor) VALUES ('$titulo','$contenido','$nombre')";
    $query=$this->db->query($sql);
    /*redirect("".base_url()."index.php/inicio");*/
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  }
  public function mostrar_contenido(){
    $sql = "SELECT * FROM textos";
    $query=$this->db->query($sql);
     if ($query->num_rows() > 0) {
       return $query;
     }else{
       return false;
     }
  }
  public function mostrar_usuarios(){
    $sql = "SELECT id_usuarios, correo, nombre, apellidos, nombrerol FROM usuarios u, roles r where u.id_rol = r.idroles ";
    $query=$this->db->query($sql);
     if ($query->num_rows() > 0) {
       return $query;
     }else{
       return false;
     }
  }
  public function MostrarUsuario($id=null){
    $sql = "SELECT id_usuarios, correo, nombre, apellidos, nombrerol, id_rol, contraseña FROM usuarios u, roles r where u.id_rol = r.idroles and u.id_usuarios = '$id' ";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function MostrarTexto($id=null){
    $sql = "SELECT * FROM textos t where t.idtextos = '$id' ";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function modificar_usuario($id=null,$nombre=null,$correo=null,$contrasena=null,$rol=null,$apellidos=null){
    $sql = "UPDATE usuarios SET nombre='$nombre',contraseña='$contrasena',apellidos='$apellidos',id_rol='$rol',correo='$correo' WHERE id_usuarios ='$id' ;";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  }
  public function modificar_contenido($id=null,$titulo=null,$texto=null,$autor=null){
    $sql = "UPDATE textos SET titulo='$titulo',texto='$texto',autor='$autor' WHERE idtextos ='$id' ;";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  }
  public function eliminar_usuario($id=null){
    $sql = "DELETE FROM usuarios where id_usuarios='$id'";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  } 
  public function eliminar_contenido($id=null){
    $sql = "DELETE FROM textos where idtextos='$id'";
    $query=$this->db->query($sql);
    redirect("".base_url()."index.php/inicie_sesion/carga_admin");
  } 

}
