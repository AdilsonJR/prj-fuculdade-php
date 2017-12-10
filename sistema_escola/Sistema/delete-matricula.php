<?php   

require_once './config/conect.php';

$id_usuario = $_GET['id_matricula'];

var_dump($id_usuario);

$sql = "delete from matricula where id_matricula = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_usuario);

$stmt->execute();

if( $stmt->rowCount() != 0){
    header("location:./lista-matricula.php?certo=true");
    }

?>