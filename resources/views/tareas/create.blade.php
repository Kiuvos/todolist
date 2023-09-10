<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar tarea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.store')}}" method="post">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
              <label for="" class="form-label">Fecha</label>
              <input type="text"
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
                <label for="" class="form-label">Realizado</label>
                <input type="text"
                  class="form-control" name="realizada" id="realizada" aria-describedby="helpId" placeholder="">
                  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>