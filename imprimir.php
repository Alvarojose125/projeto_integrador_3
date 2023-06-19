<?php
session_start();
require_once("conexao.php");

$sql = "SELECT * FROM animais JOIN usuarios ON cpf_usuario = cpf";
$resultado = $conn->query($sql);
$imprimir = array();
while ($row = $resultado->fetch_assoc()) {
    $imprimir[] = $row;
}

$_SESSION['imprimir'] = $imprimir;
header("Location: doacao.php");  

?>
