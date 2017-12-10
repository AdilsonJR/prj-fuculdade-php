<?php
require_once './config/conect.php';


$id_usuario = $_POST['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$ra = $_POST['ra'];
$senha = $_POST['senha'];
$role = $_POST['role'];


$senha = sha1(md5($senha));

var_dump($_POST);

if (empty($_POST['id_usuario'])) {
$sql = "INSERT INTO usuarios (nome_usuario, cpf, rg, ra, senha, role) values (:nome,:cpf,:rg,:ra,:senha,:role)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome_usuario);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':rg', $rg);
$stmt->bindParam(':ra', $ra);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':role', $role);
$stmt->execute();


} else {
    $sql = "UPDATE usuarios SET nome_usuario = :nome, cpf = :cpf, rg= :rg, ra = :ra, senha = :senha, role = :role 
    WHERE id_usuario = :id_usuario";
    
     $stmt = $conn->prepare($sql);
       
     $stmt->bindParam(':id_usuario', $id_usuario);
     $stmt->bindParam(':nome', $nome_usuario);
     $stmt->bindParam(':cpf', $cpf);
     $stmt->bindParam(':rg', $rg);
     $stmt->bindParam(':ra', $ra);
     $stmt->bindParam(':senha', $senha);
     $stmt->bindParam(':role', $role);  
     $stmt->execute();
}
header('location:lista-usuario.php');

?>