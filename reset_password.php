<?php
session_start();
$_SESSION['email_msg'] = "<div>LINK ENVIADO PARA SEU E-MAIL </div>";
 header("location: senha.php");
 
?>
