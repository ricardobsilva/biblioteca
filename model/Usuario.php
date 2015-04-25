<?php

include '../../conexao/Conexao.php';

class Usuario{
   private $id;
   private $descricao;
   private $email;
   private $senha;
   private $status;
   private $tipo_id;
   
   
   function getId() {
       return $this->id;
   }

   function getDescricao() {
       return $this->descricao;
   }

   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function getStatus() {
       return $this->status;
   }

   function getTipo_id() {
       return $this->tipo_id;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setDescricao($descricao) {
       $this->descricao = $descricao;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   function setStatus($status) {
       $this->status = $status;
   }

   function setTipo_id($tipo_id) {
       $this->tipo_id = $tipo_id;
   }


   function findAll(){
     $sql = "SELECT * FROM usuario";
     $query = Conexao::prepare($sql);
     $query->execute();
     return $query->fetchAll();
   }
   
   
   
   
}
