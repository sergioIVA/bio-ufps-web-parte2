<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Negocio
 *
 * @author sergio
 */
require '../../logica/DaoFactory/DaoFactory.php';

class Negocio {

    private $factory;

    public function __construct() {
        $this->factory = new DaoFactory;
    }

    public function devolverAulas() {
        return $this->factory->devolverAula()->mostrarsalas();
    }

    public function devolverUsuarioAula($aula) {
        return $this->factory->devolverUsuario()->personasEstaSala($aula);
    }

    public function reporteFecha($fechaInicio, $fechaFin) {
        return $this->factory->devolverAsistencia()->reporteRangoFecha($fechaInicio, $fechaFin);
    }

    public function mostrarAulaNombre() {
        return $this->factory->devolverAula()->mostrarSalasNombre();
    }

    public function reporteAula($aula) {
        return $this->factory->devolverAula()->reporteAula($aula);
    }

    public function reporteUsuario($usuario) {
        return $this->factory->devolverUsuario()->reporteUsuario($usuario);
    }

    public function login($usuario) {
        return $this->factory->devolverAdministrador()->traerUsuario($usuario);
    }

    public function agregarSala($nombre, $descripcion) {
        return $this->factory->devolverAula()->agregarAula($nombre, $descripcion);
    }

    public function mostrarSalaNombre($nombre) {
        return $this->factory->devolverAula()->mostrarSalaNombre($nombre);
    }

    public function modificarSala($primaria, $nombre, $descripcion) {
        return $this->factory->devolverAula()->modificarSala($primaria, $nombre, $descripcion);
    }

    public function eliminarSala($nombre) {
        return $this->factory->devolverAula()->eliminarSala($nombre);
    }

    public function mostrarAdministradores() {
        return $this->factory->devolverAdministrador()->mostrarAdministradores();
    }

    public function agregarAdministrador($Usuario, $contraseña, $nombre, $cedula, $correo) {
        return $this->factory->devolverAdministrador()->agregarAdministrador($Usuario, $contraseña, $nombre, $cedula, $correo);
    }

    public function eliminarAdministrador($usuario) {
        return $this->factory->devolverAdministrador()->eliminarAdministrador($usuario);
    }

    public function consultarAdministradorLogin($usuario) {
        return $this->factory->devolverAdministrador()->consultarAdministradorLogin($usuario);
    }

    public function modificarAdministrador($primaria, $usuario, $nombre, $cedula, $clave, $correo) {
        return $this->factory->devolverAdministrador()->ModificarAdministrador($primaria, $usuario, $nombre, $cedula, $clave, $correo);
    }

    public function mostrarEstudiantes() {
        return $this->factory->devolverUsuario()->mostrarEstudiantes();
    }

    public function mostrarEstudiante($cedula) {
        return $this->factory->devolverUsuario()->mostrarUsuario($cedula);
    }

    public function modificarEstudiante($primaria, $nombre, $cedula, $codigo, $telefono) {
        return $this->factory->devolverUsuario()->modificarEstudiante($primaria, $nombre, $cedula, $codigo, $telefono);
    }

    public function eliminarEstudiante($cedula) {
        return $this->factory->devolverUsuario()->eliminarEstudiante($cedula);
    }

    public function mostrarDocentes() {
        return $this->factory->devolverUsuario()->mostrarDocentes();
    }

    public function mostrarDocente($cedula) {
        return $this->factory->devolverUsuario()->mostrarDocente($cedula);
    }

    public function modificarDocente($primaria, $nombre, $cedula, $codigo, $tipoDocente, $telefono) {
        return $this->factory->devolverUsuario()->modificarDocente($primaria, $nombre, $cedula, $codigo, $tipoDocente, $telefono);
    }

    public function eliminarDocente($cedula) {
        return $this->factory->devolverUsuario()->eliminarDocente($cedula);
    }

    public function mostrarAdministrativos() {
        return $this->factory->devolverUsuario()->mostrarAdministrativos();
    }

    public function mostrarAdministrativo($cedula) {
        return $this->factory->devolverUsuario()->mostrarAdministrativo($cedula);
    }

    public function modificarAdministrativo($primaria, $nombre, $cedula, $cargo, $correo, $telefono) {
        return $this->factory->devolverUsuario()->modificarAdministrativo($primaria, $nombre, $cedula, $cargo, $correo, $telefono);
    }

    public function eliminarAdministrativo($cedula) {
        return $this->factory->devolverUsuario()->eliminarAdministrativo($cedula);
    }

    public function mostrarExternos() {
        return $this->factory->devolverUsuario()->mostrarExternos();
    }

    public function mostrarExterno($cedula) {
        return $this->factory->devolverUsuario()->mostrarExterno($cedula);
    }

    public function modificarExterno($primaria, $nombre, $cedula, $cargo, $correo, $telefono) {
        return $this->factory->devolverUsuario()->modificarExterno($primaria, $nombre, $cedula, $cargo, $correo, $telefono);
    }

    public function eliminarExterno($cedula) {
        return $this->factory->devolverUsuario()->eliminarExterno($cedula);
    }

    public function mostrarGrupos() {
        return $this->factory->devolverGrupo()->mostrarGrupos();
    }

    public function mostrarGrupoInvestigacion($grupo) {
        return $this->factory->devolverGrupo()->mostrarGrupoInvestigacion($grupo);
    }

    public function modificarGrupo($primaria, $nombre) {
        return $this->factory->devolverGrupo()->modificarGrupo($primaria, $nombre);
    }

    public function eliminarGrupo($grupo) {
        return $this->factory->devolverGrupo()->eliminarGrupo($grupo);
    }

    public function agregarGrupo($idGrupo, $nombre) {
        return $this->factory->devolverGrupo()->agregarGrupo($idGrupo, $nombre);
    }

    public function numeroRegistroSalas() {
        return ($this->factory->devolverAula()->consultarCantidadAula());
    }

    public function CantidadSemilleroSala() {
        return ($this->factory->devolverGrupo()->CantidadSemilleroSala());
    }

    public function cantidadUsuariosSalaFecha($fechaIni, $fechaFin) {

        return ($this->factory->devolverAula()->cantidadUsuariosSalaFecha($fechaIni, $fechaFin));
    }

    public function cantidadUsuarioSemilleroFecha($fechaInicio, $fechaFin) {

        return ($this->factory->devolverGrupo()->cantidadUsuarioSemilleroFecha($fechaInicio, $fechaFin));
    }

    public function reporteSemillero($semillero) {
        return ($this->factory->devolverGrupo()->reporteSemillero($semillero));
    }

    public function historial() {
        return $this->factory->devolverAsistencia()->historial();
    }

    public function consultarCorreo($correo) {
        return $this->factory->devolverAdministrador()->consultarCorreo($correo);
    }

    public function estadisticaGeneralTipoUsuario() {
        return $this->factory->devolverAsistencia()->estadisticaGeneralTipoUsuario();
    }

    public function estadisticaEspecificaTipoUsuario($fechaInicio, $fechaFin) {
        return $this->factory->devolverAsistencia()->estadisticaEspecificaTipoUsuario($fechaInicio, $fechaFin);
    }

    public function borrarHsitorial() {
        return $this->factory->devolverAsistencia()->borrarHsitorial();
    }
    
     public function verificarExisteCedulaAdministrador($cedula){
        return $this->factory->devolverAdministrador()->verificarExisteCedulaAdministrador($cedula);
    }
    
    public function verificarExisteCodigoUsuario($codigo){
        return $this->factory->devolverUsuario()->verificarExisteCodigoUsuario($codigo);
    }

}

?>