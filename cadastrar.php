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
    
   
  </body>
</html>