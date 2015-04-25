<?php

include '../../model/Usuario.php';

class UsuarioController {
    
 
    function findAll(){
        $usuario = new Usuario();
        return $usuario->findAll();
    }
    
    
}
