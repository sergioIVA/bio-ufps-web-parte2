<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorAdministrador
 *
 * @author sergio
 */
require '../../logica/negocio/Negocio.php';

class ControladorAdministrador {

    private $myNegocio;

    public function __construct() {
        $this->myNegocio = new Negocio();
    }

    public function mostrarSalas() {
        return $this->myNegocio->devolverAulas();
    }

    public function mostrarUsuarioAula($aula) {
        return $this->myNegocio->devolverUsuarioAula($aula);
    }

    public function reporteFecha($rango) {
        list($rango1, $rango2) = split("-", $rango);
        return $this->myNegocio->reporteFecha($rango1, $rango2);
    }

    public function mostrarAulaNombre() {
        return $this->myNegocio->mostrarAulaNombre();
    }

    public function reporteAula($aula) {
        return $this->myNegocio->reporteAula($aula);
    }

    public function reporteUsuario($usuario) {
        return $this->myNegocio->reporteUsuario($usuario);
    }

    public function login($usuario) {
        return $this->myNegocio->login($usuario);
    }

    public function agregarSala($nombre, $descripcion) {
        return $this->myNegocio->agregarSala($nombre, $descripcion);
    }

    public function mostrarSalaNombre($nombre) {
        return $this->myNegocio->mostrarSalaNombre($nombre);
    }

    public function modificarSala($primaria, $nombre, $descripcion) {
        return $this->myNegocio->modificarSala($primaria, $nombre, $descripcion);
    }

    public function eliminarSala($nombre) {
        return $this->myNegocio->eliminarSala($nombre);
    }

    public function mostrarAdministradores() {
        return $this->myNegocio->mostrarAdministradores();
    }

    public function agregarAdministrador($Usuario, $contraseña, $nombre, $cedula, $correo) {
        return $this->myNegocio->agregarAdministrador($Usuario, $contraseña, $nombre, $cedula, $correo);
    }

    public function eliminarAdministrador($usuario) {
        return $this->myNegocio->eliminarAdministrador($usuario);
    }

    public function consultarAdministradorLogin($usuario) {
        return $this->myNegocio->consultarAdministradorLogin($usuario);
    }

    public function modificarAdministrador($primaria, $usuario, $nombre, $cedula, $clave, $correo) {
        return $this->myNegocio->modificarAdministrador($primaria, $usuario, $nombre, $cedula, $clave, $correo);
    }

    public function mostrarEstudiantes() {
        return $this->myNegocio->mostrarEstudiantes();
    }

    public function mostrarEstudiante($cedula) {
        return $this->myNegocio->mostrarEstudiante($cedula);
    }

    public function modificarEstudiante($primaria, $nombre, $cedula, $codigo, $telefono) {
        return $this->myNegocio->modificarEstudiante($primaria, $nombre, $cedula, $codigo, $telefono);
    }

    public function eliminarEstudiante($cedula) {
        return $this->myNegocio->eliminarEstudiante($cedula);
    }

    public function mostrarDocentes() {
        return $this->myNegocio->mostrarDocentes();
    }

    public function mostrarDocente($cedula) {
        return $this->myNegocio->mostrarDocente($cedula);
    }

    public function modificarDocente($primaria, $nombre, $cedula, $codigo, $tipoDocente, $telefono) {
        return $this->myNegocio->modificarDocente($primaria, $nombre, $cedula, $codigo, $tipoDocente, $telefono);
    }

    public function eliminarDocente($cedula) {
        return $this->myNegocio->eliminarDocente($cedula);
    }

    public function mostrarAdministrativos() {
        return $this->myNegocio->mostrarAdministrativos();
    }

    public function mostrarAdministrativo($cedula) {
        return $this->myNegocio->mostrarAdministrativo($cedula);
    }

    public function modificarAdministrativo($primaria, $nombre, $cedula, $cargo, $correo, $telefono) {
        return $this->myNegocio->modificarAdministrativo($primaria, $nombre, $cedula, $cargo, $correo, $telefono);
    }

    public function eliminarAdministrativo($cedula) {
        return $this->myNegocio->eliminarAdministrativo($cedula);
    }

    public function mostrarExternos() {
        return $this->myNegocio->mostrarExternos();
    }

    public function mostrarExterno($cedula) {
        return $this->myNegocio->mostrarExterno($cedula);
    }

    public function modificarExterno($primaria, $nombre, $cedula, $cargo, $correo, $telefono) {
        return $this->myNegocio->modificarExterno($primaria, $nombre, $cedula, $cargo, $correo, $telefono);
    }

    public function eliminarExterno($cedula) {
        return $this->myNegocio->eliminarExterno($cedula);
    }

    public function mostrarGrupos() {
        return $this->myNegocio->mostrarGrupos();
    }

    public function mostrarGrupoInvestigacion($grupo) {
        return $this->myNegocio->mostrarGrupoInvestigacion($grupo);
    }

    public function modificarGrupo($primaria, $nombre) {
        return $this->myNegocio->modificarGrupo($primaria, $nombre);
    }

    public function eliminarGrupo($grupo) {
        return $this->myNegocio->eliminarGrupo($grupo);
    }

    public function agregarGrupo($idGrupo, $nombre) {
        return $this->myNegocio->agregarGrupo($idGrupo, $nombre);
    }

    public function CantidadusuariosSala() {
        return $this->myNegocio->numeroRegistroSalas();
    }

    public function CantidadSemilleroSala() {
        return $this->myNegocio->CantidadSemilleroSala();
    }

    public function cantidadUsuariosSalaFecha($rango) {
        list($rango1, $rango2) = split("-", $rango);
        return $this->myNegocio->cantidadUsuariosSalaFecha($rango1, $rango2);
    }

    public function cantidadUsuarioSemilleroFecha($rango) {
        list($rango1, $rango2) = split("-", $rango);
        return $this->myNegocio->cantidadUsuarioSemilleroFecha($rango1, $rango2);
    }

    public function reporteSemillero($semillero) {
        return ($this->myNegocio->reporteSemillero($semillero));
    }

    public function historial() {
        return $this->myNegocio->historial();
    }

    public function consultarCorreo($correo) {
        return ($this->myNegocio->consultarCorreo($correo));
    }

    public function estadisticaGeneralTipoUsuario() {
        return ($this->myNegocio->estadisticaGeneralTipoUsuario());
    }

    public function estadisticaEspecificaTipoUsuario($rango) {
        list($rango1, $rango2) = split("-", $rango);
        return $this->myNegocio->estadisticaEspecificaTipoUsuario($rango1, $rango2);
    }

    public function borrarHistorial() {
        return $this->myNegocio->borrarHsitorial();
    }
    
    
    public function verificarExisteCedulaAdministrador($cedula){
       return $this->myNegocio->verificarExisteCedulaAdministrador($cedula);
    }

    public function verificarExisteCodigoUsuario($codigo){
        return $this->myNegocio->verificarExisteCodigoUsuario($codigo);
    }
    
}
?>