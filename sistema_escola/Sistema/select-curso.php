<?php
require_once './config/conect.php';

$sql = "select * from curso";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>