<?php
require 'config.php';

$name = $_POST['nome'];
$lastname = $_POST['sobrenome'];
$birthday = $_POST['data de nascimento'];
$email = $_POST['email'];
$telefone = $POST['celular'];
$senha = $_POST['senha'];
$gender = $_POST['gênero'];
$

$sql = "INSERT INTO users (name, lastname, birthday, email, telefone, senha, gender) VALUES (:name,:lastname, :birthday, :email, :telefone, :senha, :gênero)";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':name', $lastname);
    $stmt->bindParam(':name', $birthday);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':name', $celular);
    $stmt->bindParam(':name', $senha);
    $stmt->bindParam(':name', $gênero);
    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
