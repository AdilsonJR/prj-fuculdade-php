<?php
require_once './config/conect.php';


function getAllMatricula($conn){

$sql = "SELECT mat.id_matricula, us.id_usuario , us.nome_usuario, us.ra, cur.nome_curso,cur.id_curso, cur.turno, cur.semestre FROM curso cur, usuarios us, matricula mat WHERE cur.id_curso = mat.id_curso AND mat.id_usuario = us.id_usuario";
$stmt = $conn->prepare($sql); 
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $resultado;
}

function getCursos($conn){

    $sql = "SELECT id_curso, nome_curso FROM curso;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $resultado;
}

function getAlunos($conn){
    $sql = "SELECT id_usuario, nome_usuario FROM usuarios;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $resultado;
}



?>