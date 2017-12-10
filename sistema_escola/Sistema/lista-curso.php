<?php
include_once './select-curso.php';

require_once './logged.php';

if (isLoggedIn()):
  include_once './template/header.php';

?>
<link rel="stylesheet" href="./css/site.css">

<div class="table-responsive">

<?php if(isset($_GET['erro']) and $_GET['erro'] == true): ?>
<div class="alert alert-danger text-center" role="alert">Nao foi possivel deletar este curso, pois o mesmo possui alunos matriculados!!!</div>
<?php endif;?>

<?php if(isset($_GET['certo']) and $_GET['certo'] == true): ?>
<div class="alert alert-info text-center" role="alert">Curso deletado com sucesso!!!!</div>
<?php endif;?> 

<h1 class="text-center">Tabela de Cursos</h1>
  <table class="table table-hover tabela">
  <tr>
    <th class="text-center" >id</th>
    <th class="text-center" >Curso</th>
    <th class="text-center" >Turno</th> 
    <th class="text-center" >Semestre</th>
    <th class="text-center" >Ação</th>
  </tr>
  <?php foreach ($resultado as $rs) :  ?>
  <tr>
    <td class="text-center" ><?php echo $rs['id_curso'] ?></td>
    <td class="text-center" ><?php echo $rs['nome_curso'] ?></td>
    <td class="text-center" ><?php echo $rs['turno'] ?></td> 
    <td class="text-center" ><?php echo $rs['semestre'] ?></td>
    <td class="text-center" >

      
    <a class="btn btn-success" href="form-curso.php?id_curso=<?php echo $rs['id_curso'];?>&nome_curso=<?php echo $rs['nome_curso'];?>&turno=<?php echo $rs['turno'];?>&semestre=<?php echo $rs['semestre'];?>">Editar</a>
      
    <a class="btn btn-danger"  href="./delete-curso.php?id_curso=<?php echo $rs['id_curso'] ?>"> Excluir</a>
  
    </td>
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