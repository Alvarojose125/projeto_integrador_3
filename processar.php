<?php 
session_start();
require_once("conexao.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processa os dados do formulário
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senharep = $_POST["senha"];

    if ($senha === $senharep) {

        $senhaMD5 = md5($senha); 
    }

    // Verifica se já existe um registro com o mesmo CPF
    $query_select = "SELECT cpf FROM usuarios WHERE cpf = '$cpf'";
    $result_select = $conn->query($query_select);

    if ($result_select->num_rows > 0) {
        // Já existe um registro com o mesmo CPF
        $_SESSION['msg'] = "<div style='text-align:center;color: #d90404;font-weight: bold'>JÁ EXISTE UM REGISTRO COM O MESMO CPF</div>";
        header("Location: cadastro.php");
    } else {
        // Insere os dados no banco de dados
        $query_insert = "INSERT INTO usuarios (cpf, nome, sobrenome, cep, rua, bairro, cidade, estado, telefone, email, senha) 
                         VALUES ('$cpf', '$nome', '$sobrenome', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$telefone', '$email', '$senhaMD5')";

        if ($conn->query($query_insert) === TRUE) {
            $_SESSION['msg'] = "<div style='text-align:center;color: green;font-weight: bold'>USUÁRIO CADASTRADO COM SUCESSO</div>";
            header("Location: cadastro.php");
        } else {
            $_SESSION['msg'] = "<div style='text-align:center;color: #d90404;font-weight: bold'>USUÁRIO NÃO CADASTRADO</div>";
            header("Location: cadastro.php");
        }
    }
} else {
    // Retorna a página inicial caso alguém tente acessar a página processar.php via URL
    header("location: processar.php");
}
