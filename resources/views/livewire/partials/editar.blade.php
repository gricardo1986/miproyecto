<!-- Modal -->
<div class="modal" tabindex="-1" @if($editar) style="display:block" @endif aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Registro</h1>
      </div>
      <div class="modal-body">
        
      
              <div class="row">
                <div class="col-5 my-2">
                    <label for="nombre" class="col-form-label">Nombre</label>
                </div>
                <div class="col-7 my-2">
                    <input type="text" wire:model="updnombre" class="form-control" required>
                    @error('updnombre') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="row">
                  <div class="col-5 my-2">
                      <label for="fecha_nacimiento" class="col-form-label">Fecha de Nacimiento</label>
                  </div>
                  <div class="col-7 my-2">
                      <input type="date" wire:model="updfecha_nacimiento" class="form-control" min="1930-01-01" max="2012-12-31" required>
                      @error('updfecha_nacimiento') <div class="text-danger">{{ $message }}</div> @enderror
                  </div>
              </div>
              <div class="row">
                <div class="col-5 my-2">
                    <label for="sexo" class="col-form-label">Sexo</label>
                </div>
                <div class="col-7 my-2">
                    <select class="form-select" wire:model="updsexo" required>
                        <option value="m" selected>Masculino</option>
                        <option value="f">Femenino</option>
                    </select>
                    @error('updsexo') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="row">
                  <div class="col-5 my-2">
                      <label for="estatura" class="col-form-label">Estatura</label>
                  </div>
                  <div class="col-7 my-2">
                      <input type="number" wire:model="updestatura" class="form-control" min="0" max="1000000" required>
                      @error('updestatura') <div class="text-danger">{{ $message }}</div> @enderror
                  </div>
              </div>
              <div class="row">
                  <div class="col-5 my-2">
                      <label for="peso" class="col-form-label">Peso</label>
                  </div>
                  <div class="col-7 my-2">
                      <input type="number" wire:model="updpeso" class="form-control" required>
                      @error('updpeso') <div class="text-danger">{{ $message }}</div> @enderror
                  </div>
              </div>


      </div>
      <div class="modal-footer">
        <button type="button" wire:click="close_edit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button wire:click="update({{$idpaciente}})" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>

@if($editar)
<div class="modal-backdrop show"></div>
@endif