<?php
require_once("conexao.php");-
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("conexao.php");

    $nome = $_POST["nome"];
    $especie = $_POST["especie"];
    $idade = $_POST["idade"];
    $raca = $_POST["raca"];
    $descricao = $_POST["descricao"];
    $foto = $_FILES["foto"]["name"];
    $cpf = $_SESSION['cpf'];
   
    $destino = "uploads/" . $foto;
    move_uploaded_file($_FILES["foto"]["tmp_name"], $destino);

    // Insira os dados no banco de dados
    $sql = "INSERT INTO animais (nome_pet, especie, idade, raca, descricao, foto, cpf_usuario) VALUES ('$nome', '$especie', '$idade', '$raca', '$descricao', '$destino', '$cpf')";
    $conn->query($sql);

    $_SESSION['msg_ok'] = "Animal cadastro com sucesso!";
    header("Location: meusAnimais.php");
    exit();
}
?>/