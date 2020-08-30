<?php 
require_once'CLASSES/usuarios.php';
$u = new Usuarios;

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Tela de Login</title>
   
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
   
    
  </head>
  <body>
      <div id="corpo-form-cad">
      <h1 id="h1-cad">CADASTRAR</h1>
     <form method="POST" action="processa.php">
         <input type="text" name="nome" placeholder ="Nome Completo" maxlength="30">
         <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
         <input type="email" name="usuario" placeholder="Usuário" maxlength="40">
         <input type="password" name="senha" placeholder="Senha" maxlength="15">
         <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
         <input type="submit" value="CADASTRAR" class="cordofundobtn">
         

     </form>
    </div>
    <?php 
    //verificar se clicou no botao
    iseet($_POST['nome'])
    {
     $nome = addslashes ($_POST['nome']);
     $telefone = addslashes ($_POST['telefone']);
     $email = addslashes ($_POST['email']);
     $senha = addslashes ($_POST['senha']);
     $confirmarSenha = addslashes ($_POST['confSenha']);
     //verificar se esta preenchido

     if(!empty($nome) && !empty($telefone) && !empty($email)&& !empty($senha) && !emply($confirmarSenha))
      {

         $u->conectar("projeto_login", "localhost", "root", "");
      } else
      {

        echo "Preencha todos os campos!"
      }

    } 

    ?>
    
   
  </body>
</html>