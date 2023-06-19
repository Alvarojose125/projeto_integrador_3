<?php
session_start();
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $senhaMD5 = md5($senha);

    $sql = "SELECT * FROM usuarios WHERE cpf='$cpf' AND senha='$senhaMD5'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['cpf'] = $row["cpf"];
        $_SESSION['nome'] = $row["nome"];
        $_SESSION['link_oculto'] = "<div> <a href='meusAnimais.php'>Meus animais </a> </div>";
        $_SESSION['sair'] = "<div><a href='sair.php'>Sair</a></div>";
        


        header("Location: meusAnimais.php");
    } else {
        $_SESSION['msg_er'] = "<div style='text-align:center;color: red;font-weight: bold'>Usuário e/ou senha inválidos</div>";

        header("Location: login.php");
    }
}
