<?php  
include("funcoes-seguranca.php");
deslogar();
$_SESSION["success"] = "Você saiu do sistema!";
header("Location: index.php");
die();




?>