<?php 
   $dbHost = "Localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "ghostclothesdb";

   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if(!$conexao){
      die("Erro ao conectar ao DB".mysqli_connect_error());
   }

   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $email = $_POST['email'];
   $celular = $_POST['celular'];
   $senha = $_POST['senha'];

   $sql = "INSERT INTO usuários (nome,sobrenome,email,celular,senha) VALUES ('$nome','$sobrenome','$email','$celular','$senha')";

   if(mysqli_query($conexao,$sql)){
      echo "Pessoa Cadastrada com Sucesso";
      header('Refresh: 0.5; URL=index.html');
      exit;
   }else{
      echo "Erro ao cadastrar pessoa:".mysqli_error($conexao);
   }

   mysqli_close($conexao);
?>