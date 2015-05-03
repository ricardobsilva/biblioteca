<?php

include '../../model/Usuario.php';

class UsuarioController {
    
    function insertControl(){
        if(isset($_POST['salvar'])){
          $usuario = new Usuario();  
          
          $descricao = $_POST['descricao'];
          $email = $_POST['email'];
          $senha = md5($_POST['senha']);
          $status = $_POST['status'];
          $tipo_id = $_POST['tipo_id'];
          
          
          $usuario->setDescricao($descricao);
          $usuario->setEmail($email);
          $usuario->setSenha($senha);
          $usuario->setStatus($status);
          $usuario->setTipo_id($tipo_id);
          
          $usuario->insert();
        }    
    }
        
    function findAll(){
        $usuario = new Usuario();
        return $usuario->findAll();
    }
    
    
}
