<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoUsuario
 *
 * @author sergio
 */
class DaoUsuario {
    
   
    private $host = "sandbox2.ufps.edu.co";
    private $user = "ufps_55";
    private $pw = "ufps_11";
    private $db = "ufps_55";
  
    
   
  
    
    public function personasEstaSala($Aula){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select Usu.tipoUsuario,Au.Nombre_Aula,Asis.Descripcion,Usu.nombre,Usu.cedula,Usu.foto,Asis.Fecha,Asis.hora_Entrada from asistenciaprograma Asis,usuario Usu,aula Au where Asis.Aula_Nombre=Au.Nombre_Aula and Asis.Usuario_cedula=Usu.cedula "
                . "and hora_Salida is null and Au.Nombre_Aula='".$Aula."'";
        $result=  mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
        
    }
    
    public function reporteUsuario($usuario){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select Usu.tipoUsuario,Au.Nombre_Aula,Usu.nombre,Usu.codigo,Usu.cedula,"
                . "Usu.tipoDocente,Usu.correo,Usu.cargo,Usu.telefono,Asis.Fecha,"
                . "Asis.hora_Entrada,Asis.hora_Salida from aula as Au,asistenciaprograma"
                . " as Asis,usuario as Usu where Au.Nombre_Aula=Asis.Aula_Nombre and "
                . "Asis.Usuario_cedula=Usu.cedula and Usu.tipoUsuario='".$usuario."'";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
    public function mostrarEstudiantes(){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Estudiante'";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
        
    }
    
    public function mostrarUsuario($cedula){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Estudiante' && cedula='".$cedula."' ";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result; 
    }
    
    public function modificarEstudiante($primaria,$nombre,$cedula,$codigo,$telefono){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="UPDATE usuario set nombre='".$nombre."',cedula='". 
              $cedula."',codigo='".$codigo."',telefono='".$telefono."'
              where cedula='".$primaria."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
   
    
    public function eliminarEstudiante($cedula){
        
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "delete from usuario where cedula='" .$cedula. "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
    public function mostrarDocentes(){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Docente'";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;  
    }

     
    public function mostrarDocente($cedula){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Docente' && cedula='".$cedula."' ";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result; 
    }
    
    public function modificarDocente($primaria,$nombre,$cedula,$codigo,$tipoDocente,$telefono){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="UPDATE usuario set nombre='".$nombre."',cedula='". 
              $cedula."',codigo='".$codigo."',tipoDocente='".$tipoDocente."',telefono='"
                .$telefono."'
              where cedula='".$primaria."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
     public function eliminarDocente($cedula){
        
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "delete from usuario where cedula='" .$cedula. "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    public function mostrarAdministrativos(){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Administrativo'";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;  
    }
    
     public function mostrarAdministrativo($cedula){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Administrativo' && cedula='".$cedula."' ";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result; 
    }
    
    public function modificarAdministrativo($primaria,$nombre,$cedula,$cargo,$correo,$telefono){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="UPDATE usuario set nombre='".$nombre."',cedula='". 
              $cedula."',cargo='".$cargo."',correo='".$correo."',telefono='".$telefono."'
              where cedula='".$primaria."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
     public function eliminarAdministrativo($cedula){
        
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "delete from usuario where cedula='" .$cedula. "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
   
    public function mostrarExternos(){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Externo'";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;  
    }
    
     public function mostrarExterno($cedula){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where tipoUsuario='Externo' && cedula='".$cedula."' ";
        $result=  mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result; 
    }
    
    
    public function modificarExterno($primaria,$nombre,$cedula,$cargo,$correo,$telefono){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="UPDATE usuario set nombre='".$nombre."',cedula='". 
              $cedula."',cargo='".$cargo."',correo='".$correo."',telefono='".$telefono."'
              where cedula='".$primaria."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    public function eliminarExterno($cedula){
        
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql= "delete from usuario where cedula='" .$cedula. "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    
    public function verificarExisteCodigoUsuario($codigo){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql="select * from usuario where codigo='".$codigo."'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
}
