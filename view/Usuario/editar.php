<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php 

include ('../../template/menu.php');
include ('../../control/UsuarioController.php');

$usuarioController = new UsuarioController();
$id = $_GET['id'];
$usuario = $usuarioController->find($id);
if(isset($_POST['salvar'])){
    $usuarioController->update();
    
    
}
    


?>
<body>
    <form method="POST">
        
        
        <div class="col-md-6 col-md-offset-3" >
            <input value="<?php echo $usuario->id;?>" name="id" class="form-control" type="hidden"  >
            
            Nome do Usuário
            <input type="text" class="form-control" name="descricao" required="true" value="<?php echo $usuario->descricao; ?>">

            Email
            <input type="email" class="form-control" name="email" value="<?php echo $usuario->email; ?>">

            Senha
            <input type="password" class="form-control" name="senha" value="<?php echo $usuario->senha; ?>">
            <div class="col-md-4" style=" margin-left: -15px;">
                Status
                <select class="form-control" name="status">
                    <option value="<?php echo $usuario->status; ?>" ><?php echo $usuario->status; ?></option>
                    <option value="ATIVO">ativo</option>
                    <option value="INATIVO" >inativo</option>    
                </select>

                Tipo de usuário
                <select class="form-control" name="tipo_id" >
                    <option value=""> VAZIO</option>
                    <option value="1" >administrador</option>
                    <option value="2">vendedor</option>
                    <option value="3">usuario comum</option>
                </select><br>
                
            </div>
            <input type="submit" class="btn btn-success btn-sm btn-block" name="salvar"  value="enviar">
            <input type="reset" class="btn btn-danger btn-sm btn-block" value="limpar">
        </div>    
    </form>
</body>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>