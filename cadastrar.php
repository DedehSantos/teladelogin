<?php 
require_once 'CLASSES/usuarios.php';
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
     <form method="POST">
         <input type="text" name="nome" placeholder ="Nome Completo" maxlength="30">
         <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
         <input type="email" name="email" placeholder="Usuário" maxlength="40">
         <input type="password" name="senha" placeholder="Senha" maxlength="15">
         <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
         <input type="submit" value="cadastrar" class="cordofundobtn">
         

     </form>
    </div>
    <?php 
    //verificar se clicou no botao
    if (isset($_POST['nome']))
    {
     $nome = addslashes ($_POST['nome']);
     $telefone = addslashes ($_POST['telefone']);
     $email = addslashes ($_POST['email']);
     $senha = addslashes ($_POST['senha']);
     $confirmarSenha = addslashes ($_POST['confSenha']);
     //verificar se esta preenchido

     if(!empty($nome) && !empty($telefone) && !empty($email) && !empty(
       $senha) && !empty($confirmarSenha))
      {

         $u->conectar("projeto_login", "localhost", "root", "");
         if($u->msgErro == "")// se esta tudo ok
         {
            if ($senha == $confirmarSenha)
           {
                if($u->cadastrar($nome, $telefone,$email,$senha))
               {
                  echo "cadastrado com sucesso! Acesse para entrar";
               }               
               else
               {
                  echo "Email já cadastrado!";
               }
          }
           else
          {
             echo "senhas e confirmar senha nao correspondem!";
          }

         }
         else
         {
            echo "Erro: ".msgErro;

         }

      } else

      {

        echo "Preencha todos os campos!";
      }

    } 

    ?>
    
   
  </body>
</html>