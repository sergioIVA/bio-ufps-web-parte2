<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoFactory
 *
 * @author sergio
 */

require '../../logica/DAO/DaoAula.php';
require '../../logica/DAO/DaoUsuario.php';
require '../../logica/DAO/DaoAsistenciaPrograma.php';
require '../../logica/DAO/DaoAdministrador.php';
require '../../logica/DAO/DaoGrupo.php';

class DaoFactory {
    
    
    public function devolverAula(){
        return new DaoAula;
    }
    
    public function devolverUsuario(){   
        return new DaoUsuario();
    }
    
   public function devolverAsistencia(){
        return new DaoAsistenciaPrograma();      
    }
    
    public function devolverAdministrador(){
        return new DaoAdministrador();
    }
    
    public function devolverGrupo(){
        return new DaoGrupo();
    }

}
?>