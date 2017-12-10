<?php
require_once './Sistema/config/conect.php';


// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$ra = $_POST['ra'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

// var_dump($_POST);


$senha = sha1(md5($senha));




$sql = "select id_usuario, nome_usuario, ra, senha, role from usuarios where ra = :ra and senha = :senha ";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':ra', $ra);
$stmt->bindParam(':senha', $senha);

$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);


if($resultado){
	$_SESSION['id_usuario'] = $resultado['id_usuario'];
	$_SESSION['nome_usuario'] = $resultado['nome_usuario'];
	$_SESSION['ra'] = $resultado['ra'];
	$_SESSION['role'] = $resultado['role'];
	$_SESSION['logged_in'] = true;
	var_dump($_SESSION);
	header("location:Sistema");
	
}else {
	$erro = "?erro=true";
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);

	header("location:index.php$erro");

}



?>