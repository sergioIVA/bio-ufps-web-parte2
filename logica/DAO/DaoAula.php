<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoAula
 *
 * @author sergio
 */
class DaoAula {
   
    private $host = "sandbox2.ufps.edu.co";
    private $user = "ufps_55";
    private $pw = "ufps_11";
    private $db = "ufps_55";
   
   
    
    public function mostrarsalas() {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select * from aula ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function mostrarSalaNombre($nombre) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select * from aula where Nombre_Aula='" . $nombre . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function modificarSala($primaria, $nombre, $descripcion) {

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "UPDATE aula set Nombre_Aula='" . $nombre . "',Descripcion='"
                . $descripcion . "'  where Nombre_Aula='" . $primaria . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function mostrarSalasNombre() {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select Nombre_Aula from aula ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function reporteAula($aula) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select Au.Nombre_Aula,Au.Descripcion,Usu.tipoUsuario,Usu.nombre,Asis.Fecha,Asis.hora_Entrada,Asis.hora_Salida,"
                . "Asis.Descripcion from aula as Au,asistenciaprograma as Asis,usuario as Usu where Au.Nombre_Aula=Asis.Aula_Nombre"
                . " and Asis.Usuario_cedula=Usu.cedula and  Au.Nombre_Aula='" . $aula . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function agregarAula($nombre, $descripcion) {

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "INSERT INTO aula(Nombre_Aula,Descripcion)values ('" . $nombre . "','" . $descripcion . "')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function eliminarSala($nombre) {

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "delete from aula where Nombre_Aula='" . $nombre . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function consultarCodigoAula() {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select Nombre_Aula from aula";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function consultarCantidadAula() {


        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "SELECT a.Descripcion,a.Nombre_Aula,COUNT( a.Nombre_Aula ) cuantos 
        FROM asistenciaprograma ap, aula a
        WHERE ap.Aula_Nombre = a.Nombre_Aula
        GROUP BY (
          a.Nombre_Aula
           )";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function cantidadUsuariosSalaFecha($fechaInicio, $fechaFin) {

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
       
        
        $sql = "SELECT a.Descripcion,a.Nombre_Aula, COUNT(a.Nombre_Aula) cuantos
            FROM asistenciaprograma ap, aula a
            WHERE ap.Aula_Nombre = a.Nombre_Aula && ap.Fecha
            BETWEEN  '" .$fechaInicio  . "' AND  '" . $fechaFin . "'
            GROUP BY (a.Nombre_Aula)";
        

        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function reformularFecha($fecha) {
        list($valor1, $valor2, $valor3) = split("/", $fecha);
        return (str_replace(' ', '', $valor3) . "/" . str_replace(' ', '', $valor1) . "/" . str_replace(' ', '', $valor2));
    }

}
