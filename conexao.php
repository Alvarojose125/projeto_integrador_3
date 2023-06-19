
<?php

session_start();
define('HOST', 'sql204.infinityfree.com');
define('USER', 'epiz_34340562');
define('PASS', 'cnhvF1knbWI');
define('BASE', 'epiz_34340562_adoteme');
define('PORT', 3306);
 
$conn = mysqli_connect(HOST, USER, PASS, BASE, PORT);



if (mysqli_connect_errno()) {

	printf("<br>Conexão Falhou: %s\n</br>", mysqli_connect_error());
	
}else{

//printf("<br><br>Status da conexão ok: %s\n", mysqli_stat($conn));

}
mysqli_set_charset($conn, "utf8");

?>
