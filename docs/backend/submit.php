<?php
 // Conexão com o banco de dados
 $conexao = mysqli_connect("localhost", "root", "Root", "ghostclothesdb");

 // Verifica se a conexão ocorreu com sucesso
 if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
 }

 // Recupera os dados do formulário
 $nome = $_POST['nome'];
 $idade = $_POST['idade'];
 $email = $_POST['email'];

 // Insere os dados no banco de dados
 $sql = "INSERT INTO pessoas (nome, idade, email) VALUES ('$nome', '$idade', '$email')";

 // Executa a consulta
 if (mysqli_query($conexao, $sql)) {
    echo "Pessoa cadastrada com sucesso!";
 } else {
    echo "Erro ao cadastrar pessoa: " . mysqli_error($conexao);
 }

 // Fecha a conexão
 mysqli_close($conexao);
?>