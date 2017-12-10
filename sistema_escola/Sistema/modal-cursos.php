
<div class="modal fade" id="deletarcurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
   
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <h2>Deseja realmente deletar este registro? <?php echo $rs['id_curso'] ?></h2>
    </div>
    <div class="modal-footer">
    <a class="btn btn-danger" href="./delete-curso.php?id_curso=<?php echo $rs['id_curso'] ?>">Excluir</a>
      <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
    </div>
  </div>
</div>
</div>