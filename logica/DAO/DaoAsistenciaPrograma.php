<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoAsistenciaPrograma
 *
 * @author sergio
 */
class DaoAsistenciaPrograma {

   
    private $host = "sandbox2.ufps.edu.co";
    private $user = "ufps_55";
    private $pw = "ufps_11";
    private $db = "ufps_55";
    
  
   
    public function reformularFecha($fecha) {
        list($valor1, $valor2, $valor3) = split("/", $fecha);
        return (str_replace(' ', '', $valor3) . "/" . str_replace(' ', '', $valor1) . "/" . str_replace(' ', '', $valor2));
    }

    public function reporteRangoFecha($fechaInicio, $fechaFin) {

        $fechaInicio = $this->reformularFecha($fechaInicio);
        $fechaFin = $this->reformularFecha($fechaFin);

        $fecha1 = strtotime($fechaInicio);
        $fecha2 = strtotime($fechaFin);

        if ($fecha1 > $fecha2) {
            throw new Exception("FECHA  NO  VALIDA");
        }

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }

        $sql = "select Asis.Fecha,Au.Nombre_Aula,Usu.tipoUsuario,Usu.nombre,Usu.cedula,Asis.hora_Entrada,Asis.hora_Salida,Asis.Descripcion from aula as "
                . "Au,asistenciaprograma as Asis,usuario as Usu where Au.Nombre_Aula=Asis.Aula_Nombre and Asis.Usuario_cedula=Usu.cedula"
                . " and Fecha between '" . $fechaInicio . "' and '" . $fechaFin . "'";

        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        return $result;
    }

    public function historial() {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "SELECT * FROM asistenciaprograma ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    public function borrarHsitorial(){
          $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "delete  from asistenciaprograma";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }


    public function estadisticaGeneralTipoUsuario(){
    $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "SELECT u.tipoUsuario, COUNT( u.tipoUsuario ) cuantos
               FROM asistenciaprograma ap, usuario u
               WHERE ap.Usuario_cedula = u.cedula GROUP BY (u.tipoUsuario)";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    
    }
    
    
    public function estadisticaEspecificaTipoUsuario($fechaInicio, $fechaFin) {

        $fechaInicio = $this->reformularFecha($fechaInicio);
        $fechaFin = $this->reformularFecha($fechaFin);

        $fecha1 = strtotime($fechaInicio);
        $fecha2 = strtotime($fechaFin);

        if ($fecha1 > $fecha2) {
            throw new Exception("FECHA  NO  VALIDA");
        }

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
       
        
        $sql = "SELECT u.tipoUsuario, COUNT( u.tipoUsuario ) cuantos
               FROM asistenciaprograma ap, usuario u
               WHERE ap.Usuario_cedula = u.cedula && ap.Fecha
               BETWEEN  '" .$fechaInicio  . "' AND  '" . $fechaFin . "'
               GROUP BY (u.tipoUsuario)";
   
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    

}
