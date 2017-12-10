<?php
require_once './config/conect.php';

$sql = "select * from usuarios";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>