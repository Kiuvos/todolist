<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="edit{{$tareas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar tarea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update',$tareas->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$tareas->descripcion}}">
              <label for="" class="form-label">Fecha</label>
              <input type="text"
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="" value="{{$tareas->fecha}}">
                <label for="" class="form-label">Realizado</label>
                <input type="text"
                  class="form-control" name="realizada" id="realizada" aria-describedby="helpId" placeholder="" value="{{$tareas->realizada}}">
                  
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


  <!-- eliminar-->

  <div class="modal fade" id="delete{{$tareas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar tarea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.destroy',$tareas->id)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de eliminar a <strong>{{$tareas->descripcion}}</strong>?
                  
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>