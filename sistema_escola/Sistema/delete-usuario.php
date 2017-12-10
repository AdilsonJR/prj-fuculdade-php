<?php   

require_once './config/conect.php';

$id_usuario = $_GET['id_usuario'];

// var_dump($id_usuario);

$sql = "delete from usuarios where id_usuario = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_usuario);

$stmt->execute();

// var_dump($stmt->rowCount());
if( $stmt->rowCount() == 0){
header("location: lista-usuario.php?erro=true");
}else {
header("location: lista-usuario.php?certo=true");

}
?>