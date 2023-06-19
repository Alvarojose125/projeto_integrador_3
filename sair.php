<?php
session_start(); // Inicia a sessão

// Remove todas as variáveis de sessão
$_SESSION = array();

// Encerra a sessão
session_destroy();

// Redireciona o usuário para a página de login (ou qualquer outra página desejada)
header("Location: login.php");
exit();
?>
