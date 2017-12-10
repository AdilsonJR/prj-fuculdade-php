<?php
require_once './config/conect.php';
require_once './logged.php';


$sessao = $_SESSION['ra'];

$sql = "SELECT us.id_usuario, us.nome_usuario, us.cpf,us.rg, us.role, cur.nome_curso, cur.turno,cur.semestre  
FROM curso cur,
 usuarios us,
 matricula mat
WHERE us.id_usuario = mat.id_usuario
and mat.id_curso = cur.id_curso
and ra = :ra;";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ra', $sessao);

$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($resultado);

if(!$stmt->rowCount()){
    $sql = "SELECT nome_usuario, cpf, rg, role  
FROM usuarios
WHERE ra = :ra;";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ra', $sessao);

$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($resultado);
}

if (isLoggedIn()):
include_once './template/header.php';
?>

<div class="container">
      <div class="row">
  
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-2 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Dados do <?php echo $_SESSION['role']; ?> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
               
                <div class="col-md-3 col-lg-3 thumbnail " align="center">  <img src="dist/img/user.jpg" class="user-image" alt="User Image"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>nome:</td>
                        <td><?php echo $resultado['nome_usuario']?></td>
                      </tr>
                      <tr>
                        <td>CPF:</td>
                        <td><?php echo $resultado['cpf']?></td>
                      </tr>
                      <tr>
                        <td>RG:</td>
                        <td><?php echo $resultado['rg']?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Tipo de Usuario</td>
                        <td><?php echo $resultado['role']?></td>
                      </tr>
                        <tr>
                            <?php if($_SESSION['role'] != 'professor') : ?>
                       
                        <?php if($_SESSION['role'] == 'admin' ) :?>
                            
                            <?php else :?>
                        <?php if($_SESSION['role'] == 'estudante' ) :?>
                        <td>Cursando:</td>
                      
                         <td><?php echo $resultado['nome_curso']?></td>
                         <?php endif;?>
                         <?php if($_SESSION['role'] == 'professor' ) :?>
                        <td>Tutor em:</td>  
                        <?php endif;?>
                         <?php endif;?>
                         
                        
                         <?php else :?>
                        <td><?php echo $resultado['nome_curso']?></td>
                      </tr>
                      <tr>
                        <td>Turno</td>
                        <td><?php echo $resultado['turno']?></td>
                      </tr>
                        <td>Semestre:</td>
                        <td><?php echo $resultado['semestre']?>
                        </td>
                           <?php endif;?>
                      </tr>
                     
                    </tbody>
                  </table>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    
else: 
    header("location:./../index.php"); 
endif;
  
  include_once './template/footer.php';
?>