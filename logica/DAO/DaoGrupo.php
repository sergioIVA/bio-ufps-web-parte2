<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoGrupo
 *
 * @author ingeniero sergio
 */
class DaoGrupo {
   
    private $host = "sandbox2.ufps.edu.co";
    private $user = "ufps_55";
    private $pw = "ufps_11";
    private $db = "ufps_55";
   
   
    public function mostrarGrupos() {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select * from grupoinvestigacion";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        return $result;
    }

    public function mostrarGrupoInvestigacion($grupo) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "select * from grupoinvestigacion where idGrupo='" . $grupo . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function modificarGrupo($primaria, $nombre) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "UPDATE grupoinvestigacion set nombre='" .
                $nombre . "' where idGrupo='" . $primaria . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function eliminarGrupo($grupo) {

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "delete from grupoinvestigacion where idGrupo='" . $grupo . "'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function agregarGrupo($idGrupo, $nombre) {
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql = "INSERT INTO grupoinvestigacion(idGrupo,nombre)values ('" . $idGrupo . "','" . $nombre . "')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function cantidadUsuarioSemilleroFecha($fechaInicio, $fechaFin) {

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
        $sql = "SELECT g.nombre, COUNT( g.idGrupo ) cuantos
        FROM asistenciaprograma ap, grupoinvestigacion g
        WHERE g.idGrupo = ap.grupo && ap.Fecha
        BETWEEN  '" . $fechaInicio . "'
        AND  '" . $fechaFin . "'
        GROUP BY (g.idGrupo)";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function reformularFecha($fecha) {
        list($valor1, $valor2, $valor3) = split("/", $fecha);
        return (str_replace(' ', '', $valor3) . "/" . str_replace(' ', '', $valor1) . "/" . str_replace(' ', '', $valor2));
    }

    public function reporteSemillero($semillero) {

        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        $sql ="SELECT g.nombre as semillero, usu.nombre,usu.cedula, usu.tipoUsuario, asis.Fecha, asis.hora_Entrada,
              asis.hora_Salida FROM asistenciaprograma asis, grupoinvestigacion g, usuario usu
              WHERE asis.grupo = g.idGrupo && usu.cedula = asis.Usuario_cedula && g.idGrupo =".$semillero."";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
     public function CantidadSemilleroSala(){
         $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($conn->connect_error) {
            die("conexion fallida :" . $conn->connect_error);
        }
        
        $sql="SELECT g.nombre, COUNT( g.idGrupo ) cuantos
        FROM asistenciaprograma ap, grupoinvestigacion g
        WHERE g.idGrupo = ap.grupo GROUP BY (g.idGrupo)";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }


}
