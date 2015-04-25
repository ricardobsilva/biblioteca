<?php
include '../../control/UsuarioController.php';
$usuarioController = new UsuarioController();

foreach ($usuarioController->findAll() as $usuario) {
    echo $usuario->descricao;
    echo $usuario->email;
    echo $usuario->status;
}


?>
