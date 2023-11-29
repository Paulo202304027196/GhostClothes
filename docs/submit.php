<?php
require 'config.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$telefone = $POST['celular'];
$senha = $_POST['senha'];
$gender = $_POST['genero'];
$

$sql = "INSERT INTO usuarios (name, lastname, birthday, email, telefone, senha, gender) VALUES (:name,:lastname, :birthday, :email, :telefone, :senha, :gênero)";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':birthday', $birthday);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':celular', $celular);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':genero', $gênero);
    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>