<?php
require_once './config/conect.php';

var_dump($_POST);

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$turno = $_POST['turno'];
$semestre = $_POST['semestre'];


echo $nome_curso;
echo $turno;
echo $semestre;


if (empty($_POST['id_curso'])) {

    $sql = "INSERT INTO curso (nome_curso, turno, semestre) values (:nome,:turno,:semestre)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nome', $nome_curso);
    $stmt->bindParam(':turno', $turno);
    $stmt->bindParam(':semestre', $semestre);

    $stmt->execute();

} else {
    $sql = "UPDATE curso SET nome_curso = :nome, turno = :turno, semestre= :semestre WHERE id_curso = :id_curso";
   
    $stmt = $conn->prepare($sql);
      
    $stmt->bindParam(':nome', $nome_curso);
    $stmt->bindParam(':turno', $turno);
    $stmt->bindParam(':semestre', $semestre);
    $stmt->bindParam(':id_curso', $id_curso);
    
    $stmt->execute();
    
}
header('location:lista-curso.php');





?>