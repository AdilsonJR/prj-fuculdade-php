<?php
require_once './logged.php';

if (isLoggedIn()):
	include_once './template/header.php';

?>

<!-- troca form -->
<?php if (empty($_GET['id_usuario'] )) : ?>

<h2 class="">Cadastro de Usuario</h2>
<form action="insert-usuario.php" method="POST" >
	<div class="form-group"> 
		<label class="control-label ">Nome do Usuario</label>
		<input required id="nome" class="form-control" name="nome_usuario" type="text"/>
  </div>
    	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" >CPF</label>
		<input required class="form-control" name="cpf" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label ">RG</label>
		<input required class="form-control"  name="rg" type="text"/>
  </div>
    
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label " >RA</label>
		<input required class="form-control" name="ra" type="text"/>
	</div>
    
  <div class="form-group"> <!-- Subject field -->
		<label class="control-label " >Senha</label>
		<input required class="form-control" name="senha" type="password"/>
  </div>


  <div class="form-group"> 
	<label class="control-label " >Perfil</label>
	<select class="form-control"  name="role">
			<option value="professor">Professor</option>
			<option value="estudante">Estudante</option>
			<option value="gerente">Gerente</option>
			<option value="admin">Admin</option>
	</select>
  </div>

	
	<div class="form-group">
		<button class="btn btn-primary " type="submit">Cadastrar Usuario</button>
	</div>
	
</form>	

<?php else: ?>

<h2 class="">editar Usuario</h2>
<form action="insert-usuario.php" method="POST" >

	<div hidden class="form-group"> 
		<label class="control-label ">id do Usuario</label>
		<input  value="<?php echo $_GET['id_usuario']?>" id="nome" class="form-control" name="id_usuario" type="text"/>
  </div>

	<div class="form-group"> 
		<label class="control-label ">Nome do Usuario</label>
		<input  value="<?php echo $_GET['nome_usuario']?>" id="nome" class="form-control" name="nome_usuario" type="text"/>
  </div>
  	
	<div class="form-group"> <!-- Email field -->
		<label class="control-label requiredField" >CPF</label>
		<input  value="<?php echo $_GET['cpf']?>" class="form-control" name="cpf" type="text"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label ">RG</label>
		<input  value="<?php echo $_GET['rg']?>" class="form-control"  name="rg" type="text"/>
	</div>
    
  <div class="form-group"> <!-- Subject field -->
		<label class="control-label " >RA</label>
		<input  value="<?php echo $_GET['ra']?>" class="form-control" name="ra" type="text"/>
  </div>
    
  <div class="form-group"> <!-- Subject field -->
		<label class="control-label " >Senha</label>
		<input  value="<?php echo $_GET['senha']?>" class="form-control" name="senha" type="text"/>
  </div>

  <div class="form-group"> 
		<label class="control-label " >Perfil</label>
		<select class="form-control"  name="role">
				selected
				<option value="<?php echo $_GET['role']  ?>"selected ><?php echo $_GET['role']  ?></option>
				<option value="professor">Professor</option>
				<option value="estudante">Estudante</option>
				<option value="gerente">Gerente</option>
				<option value="admin">Admin</option>
		</select>
  </div>
	
	<div class="form-group">
		<button class="btn btn-primary " type="submit">Editar Usuario</button>
	</div>
	
</form>	
<?php endif; 

else: 
    header("location:./../index.php"); 
endif;

?>
<?php include_once './template/footer.php'; ?>