<?php   

require_once './config/conect.php';

$id_curso = $_GET['id_curso'];

var_dump($id_curso);

$sql = "delete from curso where id_curso = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_curso);

var_dump($stmt);
$stmt->execute();


if( $stmt->rowCount() == 0){
    header("location:./lista-curso.php?erro=true");
    }else {
    header("location:./lista-curso.php?certo=true");
    
    }


?>