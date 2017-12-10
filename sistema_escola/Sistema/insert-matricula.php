<?php
require_once './config/conect.php';


$id_matricula = $_POST['id_matricula'];
$id_usuario = $_POST['id_usuario'];
$id_curso = $_POST['id_curso'];



var_dump($_POST);

if (empty($_POST['id_matricula'])) {
$sql = "INSERT INTO matricula (id_usuario, id_curso ) values ( :usuario, :curso )";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':usuario', $id_usuario);
$stmt->bindParam(':curso', $id_curso);
$stmt->execute();


} else {
    $sql = "UPDATE matricula SET id_usuario = :usuario, id_curso = :curso  WHERE id_matricula = :matricula";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':matricula', $id_matricula);
    $stmt->bindParam(':usuario', $id_usuario);
    $stmt->bindParam(':curso', $id_curso);
    $stmt->execute();
}
header('location:lista-matricula.php');

?>