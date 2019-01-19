<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoAdministrador
 *
 * @author sergio
 */
class DaoAdministrador {

   
    private $host = "sandbox2.ufps.edu.co";
    private $user = "ufps_55";
    private $pw = "ufps_11";
    private $db = "ufps_55";
    
    
  
    

    public function traerUsuario($usuario) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select * from administrador where Usuario='" . $usuario . "'";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        return $result;
    }

    public function mostrarAdministradores() {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select * from administrador";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        return $result;
    }
    
   

    public function agregarAdministrador($Usuario, $contraseña, $nombre, $cedula,$correo) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "INSERT INTO administrador(Usuario,clave,nombre,cedula,correo)values ('" .$Usuario."','". $contraseña ."','" . $nombre . "','" . $cedula . "','".$correo."')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    public function eliminarAdministrador($usuario){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "delete from administrador where Usuario='" .$usuario. "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    public function ModificarAdministrador($primaria,$usuario,$nombre,$cedula,$clave,$correo){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="UPDATE administrador set Usuario='".$usuario."',nombre='". 
              $nombre."',clave='".$clave."',cedula='".$cedula."',correo='".$correo."'
              where Usuario='".$primaria."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
        
    }


    
    
    public function consultarAdministradorLogin($usuario){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from administrador where Usuario='".$usuario."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
    public function eliminarExterno($usuario){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "delete from administrador where Usuario='" .$usuario. "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
 
    public function consultarCorreo($correo){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "select * from  administrador where correo='".$correo."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
     public function verificarExisteCedulaAdministrador($cedula){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from administrador where cedula='".$cedula."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
      
     
    
   
    
   

}
