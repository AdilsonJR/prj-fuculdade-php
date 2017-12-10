<div class="modal fade" id="deletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Deseja realmente deletar este registro?</h2>
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger" href="./delete-usuario.php?id=<?php echo $rs['id_usuario'] ?>">Excluir</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>