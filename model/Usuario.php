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
     $sql = "SELECT user.* , tipo.descricao as tipo_descricao "
             . "FROM usuario user INNER JOIN tipo_usuario tipo"
             . " ON(user.tipo_id = tipo.id)";
     $query = Conexao::prepare($sql);
     $query->execute();
     return $query->fetchAll();
   }
   
   function insert(){
     $sql = "INSERT INTO usuario (descricao,email,senha,status,tipo_id) "
             . "VALUES (:descricao, :email , :senha , :status, :tipo_id)" ; 
     $query = Conexao::prepare($sql);
     $query->bindValue(":descricao", $this->getDescricao());
     $query->bindValue(":email", $this->getEmail());
     $query->bindValue("senha", $this->getSenha());
     $query->bindValue(":status", $this->getStatus());
     $query->bindValue(":tipo_id", $this->getTipo_id());
     $query->execute();
     $id = $this->lastInsertId();
     
     echo $id->id;
     
   }
   
   function lastInsertId(){
       $sql = "SELECT id FROM usuario ORDER BY id DESC limit 1";
       $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetch();
   }
   
   function find($id = null){
       $sql = "SELECT user.* , tipo.descricao as tipo_descricao "
             . "FROM usuario user INNER JOIN tipo_usuario tipo"
             . " ON(user.tipo_id = tipo.id) where user.id = :id";
       $query = Conexao::prepare($sql);
       $query->bindValue(":id" , $id);
       $query->execute();
       return $query->fetch();
   }
   
   function update($id = null){
       $sql = "UPDATE usuario "
               . "SET descricao = :descricao , email = :email , senha = :senha , status =:status , tipo_id = :tipo_id "
               . "WHERE id = :id";
        $query = Conexao::prepare($sql);
        $query->bindValue(":descricao", $this->getDescricao());
        $query->bindValue(":email", $this->getEmail());
        $query->bindValue("senha", $this->getSenha());
        $query->bindValue(":status", $this->getStatus());
        $query->bindValue(":tipo_id", $this->getTipo_id());
        $query->bindValue(":id" , $id);
        $query->execute();  
   }
   
}
