<?php 

clss Usuario

{
private $pdo;
public $msgErro = "";


  public function conectar($nome, $servidor, $ususario, $senha ){
      global $pdo; 
      try {
        $pdo = new PDO ("mysql:dbname".$nome.";host=".$host,$usuario,$senha);
            
      } catch (PDOException $e) {
          $msgErro = $e->getMenssage();
          
      }
      
    
  }

   public function cadastrar($nome, $telefone, $email, $senha){
       global $pdo;
       //verificar se ja existe email
       $sql = $pdo-> prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql -> execute();
        if($sql ->rowCount() > 0)
        {
          return false;// ja esta cadastrad9

        }
        else
        {
           sql = $pdo -> prepare("INSERT INTO usuario (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
           $sql->bindValue(":e", $nome);
           $sql->bindValue(":e", $telefone);
           $sql->bindValue(":e", $email);
           $sql->bindValue(":e", $senha);
           $sql->execute();
           return true;

        }

       //caso nao , Cadastrar
}

   public function logar ($email, $senha){
       global $pdo;
     //verificar se o email e senha estao cadastrados,se sim
   
     $sql = $pdo -> prepare("SELECT id_usuario FROM usuario WHERE 
     email = :e AND senha = :s ");
     $sql -> bindValue(":e", $email);
     $sql -> bindValue(":e", $senha);
     $sql -> execute();
     if($sql-> rowCount() > 0)
     {
        //entrar no sistema(sessao)
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id_usuario'] = $dado['id_usuario']

     }
     else
     {


     }

     



   }
}


?>