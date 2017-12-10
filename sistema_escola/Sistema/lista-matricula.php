<?php
include_once './select-matricula.php';


$resultado = getAllMatricula($conn);

require_once './logged.php';

if (isLoggedIn()):
  include_once './template/header.php';

?>
<link rel="stylesheet" href="./css/site.css">

<div class="table-responsive">
  
  <?php if(isset($_GET['certo']) and $_GET['certo'] == true): ?>
  <div class="alert alert-info text-center" role="alert">Matricula deletada com sucesso!!!!</div>
  <?php endif;?> 
  <h2 class="text-center">Lista de alunos matriculados</h2>

  <table class="table table-hover tabela">
  <tr>
  <th class="text-center" >id</th>
    <th class="text-center" >Nome</th>
    <th class="text-center" >RA</th>
    <th class="text-center" >Curso</th>
    <th class="text-center" >Turno</th> 
    <th class="text-center" >Semestre</th>
    <?php if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'gerente'): ?>
    
    <th class="text-center" >Ação</th>

<?php endif;?>
    
  </tr>
  <?php foreach ($resultado as $rs) :  ?>
  <tr>
    <td class="text-center" ><?php echo $rs['id_matricula'] ?></td>
    <td class="text-center" ><?php echo $rs['nome_usuario'] ?></td>
    <td class="text-center" ><?php echo $rs['ra'] ?></td> 
    <td class="text-center" ><?php echo $rs['nome_curso'] ?></td>
    <td class="text-center" ><?php echo $rs['turno'] ?></td>
    <td class="text-center" ><?php echo $rs['semestre'] ?></td>
    
    <td hidden class="text-center" ><?php echo $rs['id_curso'] ?></td>
    <td hidden class="text-center" ><?php echo $rs['id_usuario'] ?></td>



    <?php if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'gerente'): ?>

    <td class="text-center" >

      
    <a class="btn btn-success" href="form-matricula.php?id_matricula=<?php echo $rs['id_matricula'];?>&id_curso=<?php echo $rs['id_curso'];?>&nome_curso=<?php echo $rs['nome_curso'];?>&id_usuario=<?php echo $rs['id_usuario'];?>&nome_usuario=<?php echo $rs['nome_usuario'];?>
              
              ">Editar</a>
      
    <a class="btn btn-danger"  href="./delete-matricula.php?id_matricula=<?php echo $rs['id_matricula'] ?>"> Excluir</a>
  
    </td>

<?php endif;?>
  </tr>
  <?php endforeach; ?>

  </table>
</div>



<?php
else: 
  header("location:./../index.php"); 
endif;
include_once './template/footer.php';
?>