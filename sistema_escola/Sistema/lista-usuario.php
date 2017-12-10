<?php

include_once './select-usuario.php';
require_once './logged.php';

if (isLoggedIn()):
  include_once './template/header.php';

?>
<link rel="stylesheet" href="./css/site.css">

<div class="table-responsive">

  <?php if(isset($_GET['erro']) and $_GET['erro'] == true): ?>
  <div class="alert alert-danger text-center" role="alert">Nao foi possivel deletar este usuario, pois o mesmo esta matriculado em um curso!!!</div>
  <?php endif;?>

  <?php if(isset($_GET['certo']) and $_GET['certo'] == true): ?>
  <div class="alert alert-info text-center" role="alert">Usuario deletado com sucesso!!!!</div>
  <?php endif;?> 


    <h1 class="text-center">Tabela de Usuarios</h1>
  <table class="table table-hover tabela">
  <tr>
    <th class="text-center" >Id</th>
    <th class="text-center" >Nome do Usuario</th>
    <th class="text-center" >CPF</th> 
    <th class="text-center" >RG</th>
    <th class="text-center" >RA</th>
    <th class="text-center" >Senha</th>
    <th class="text-center" >Perfil</th>
    <th class="text-center" >Ação</th>
  </tr>
  <?php foreach ($resultado as $rs) :  ?>
  <tr>
  <td class="text-center" ><?php echo $rs['id_usuario'] ?></td>
    <td class="text-center" ><?php echo $rs['nome_usuario'] ?></td>
    <td class="text-center" ><?php echo $rs['cpf'] ?></td> 
    <td class="text-center" ><?php echo $rs['rg'] ?></td>
    <td class="text-center" ><?php echo $rs['ra'] ?></td>
    <td class="text-center" ><?php echo $rs['senha'] ?></td>
    <td class="text-center" ><?php echo $rs['role'] ?></td>
    <td class="text-center" >
      
      
    <a class="btn btn-success" href="form-usuario.php?id_usuario=<?php echo $rs['id_usuario'];?>&nome_usuario=<?php echo $rs['nome_usuario'];?>&cpf=<?php echo $rs['cpf'];?>&rg=<?php echo $rs['rg'];?>&ra=<?php echo $rs['ra'];?>&senha=<?php echo $rs['senha'];?>&role=<?php echo $rs['role'];?>">Editar</a>

   <a class="btn btn-danger" href="./delete-usuario.php?id_usuario=<?php echo $rs['id_usuario'] ?>">Excluir</a>
      
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