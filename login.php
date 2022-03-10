<?php
include("conecta.php");
include("banco-usuario.php");
include("funcoes-seguranca.php");
$email = $_POST["email"];
$senha = $_POST["senha"];

echo $email;
echo $senha;
$usuario = buscaUsuario($conexao, $email, $senha);

if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha inválidos";
	header("Location: index.php");
}else{
	logaUsuario($email);
	$_SESSION["success"] = "Você está logado!";
	header("Location: index.php");
}
die();



?>