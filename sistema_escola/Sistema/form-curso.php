
<?php 
require_once './logged.php';

if (isLoggedIn()):
	include_once './template/header.php'; 
?>

<!-- troca form -->
<?php if (empty($_GET['id_curso'] )) : ?>

<h2 class="">Cadastro de curso</h2>
<form action="./insert-curso.php" method="POST" >

	<div class="form-group"> <!-- Name field -->
		<label class="control-label " >Nome do curso</label>
		<input required class="form-control"  name="nome_curso" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField">Turno</label>
		<input required class="form-control" name="turno" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label ">Semestre</label>
		<input required class="form-control"  name="semestre" type="text"/>
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary "  type="submit">cadastrar Curso</button>
	</div>

</form>	

<?php else: ?>

<h2>editar curso</h2>
<form action="./insert-curso.php" method="POST" >

	<div hidden class="form-group"> <!-- Name field -->
		<label class="control-label " >Id do curso</label>
		<input  value="<?php echo $_GET['id_curso']  ?>" class="form-control"  name="id_curso" type="text"/>
	</div>

	<div class="form-group"> <!-- Name field -->
		<label class="control-label " >Nome do curso</label>
		<input  value="<?php echo $_GET['nome_curso'] ?>" class="form-control"  name="nome_curso" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField">Turno</label>
		<input  value="<?php echo $_GET['turno'] ?>" class="form-control" name="turno" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label ">Semestre</label>
		<input  value="<?php echo $_GET['semestre'] ?>" class="form-control"  name="semestre" type="text"/>
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary "  type="submit">Editar Curso</button>
	</div>

</form>	
<?php endif; 
else: 
    header("location:./../index.php"); 
endif;

?>


<?php include_once './template/footer.php'; ?>