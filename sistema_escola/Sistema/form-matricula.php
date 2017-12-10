<?php
require_once './logged.php';


include_once './select-matricula.php'; 

$cursos = getCursos($conn);
$alunos = getAlunos($conn);

if (isLoggedIn()):
	
include_once './template/header.php';

?>

<?php if (empty($_GET['id_matricula'] )) : ?>

<h2 class="">Matricular Aluno</h2>
<form action="./insert-matricula.php" method="POST" >
		
	<div class="form-group"> 
			<label class="control-label " >Aluno</label>
			<select class="form-control"  name="id_usuario">
				<?php foreach ($alunos as $aluno) :  ?>
							
					<option value="<?php echo $aluno['id_usuario'];?>"><?php echo $aluno['nome_usuario'];?></option>
					
				<?php endforeach; ?>
			</select>
	</div>

	<div class="form-group"> 
		<label class="control-label " >Curso</label>
		<select class="form-control"  name="id_curso">
			<?php foreach ($cursos as $curso) :  ?>
						
				<option value="<?php echo $curso['id_curso'];?>"><?php echo $curso['nome_curso'];?></option>
				
			<?php endforeach; ?>
		</select>
  </div>
	
	<div class="form-group">
		<button class="btn btn-primary " name="submit" type="submit">Matricular Aluno</button>
	</div>
	
</form>	

<?php else: ?>


<h2 class="">Editar matricula</h2>


<form action="./insert-matricula.php" method="POST" >
		
	<input hidden type="text" name="id_matricula" value="<?php echo $_GET['id_matricula'] ?>" >


	<div class="form-group"> 
			<label class="control-label " >Aluno</label>
			<select class="form-control"  name="id_usuario">
			<option value="<?php echo $_GET['id_usuario'] ?>" selected><?php echo $_GET['nome_usuario'] ?></option>
				<?php foreach ($alunos as $aluno) :  ?>
							
					<option value="<?php echo $aluno['id_usuario'] ?>"><?php echo $aluno['nome_usuario'] ?></option>
					
				<?php endforeach; ?>
			</select>
	</div>

	<div class="form-group"> 
		<label class="control-label " >Curso</label>
		<select class="form-control"  name="id_curso">
		<option value="<?php echo $_GET['id_curso'] ?>" selected><?php echo $_GET['nome_curso'] ?></option>		
			<?php foreach ($cursos as $curso) :  ?>
						
				<option value="<?php echo $curso['id_curso'] ?>"><?php echo $curso['nome_curso'] ?></option>
				
			<?php endforeach; ?>
		</select>
  </div>
	
	<div class="form-group">
		<button class="btn btn-primary " name="submit" type="submit">Editar Matricula</button>
	</div>
	
</form>
<?php endif;
else: 
    header("location:./../index.php"); 
endif;
?>


<?php
include_once './template/footer.php';

?>