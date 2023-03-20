<!-- Modal -->
<div class="modal" tabindex="-1" @if($detalle) style="display:block" @endif aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detalle</h1>
      </div>
      <div class="modal-body">

        <table class="table table-dark table-striped-columns">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Nacimiento</th>
              <th scope="col">Sexo</th>
              <th scope="col">Estatura</th>
              <th scope="col">Peso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @if((isset($datos_detalle["paciente"]['nombre'])))
                
                    <td>{{ $datos_detalle["paciente"]['nombre'] }}</td>
                    <td>{{ $datos_detalle["paciente"]['fecha_nacimiento'] }}</td>
                    <td>{!! 
                      ($datos_detalle["paciente"]['sexo']=='m')? 
                      '<i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Masculino" class="fa-sharp fa-solid fa-person"></i>' : 
                      '<i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Femenino" class="fa-sharp fa-solid fa-person-dress"></i>' !!}</td>
                    <td>{{ $datos_detalle["paciente"]['estatura'] }}</td>
                    <td>{{ $datos_detalle["paciente"]['peso'] }}</td>
                
              @else
                  <td colspan="5">No hay registros de este Paciente</td>
              @endif
            </tr>
          </tbody>
        </table>
        
        <p>{{ (isset($datos_detalle["recomendaciones"]))? $datos_detalle["recomendaciones"] : "" }}</p>
      
      </div>
      <div class="modal-footer">
        <button type="button" wire:click="close_detail" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@if($detalle)
<div class="modal-backdrop show"></div>
@endif