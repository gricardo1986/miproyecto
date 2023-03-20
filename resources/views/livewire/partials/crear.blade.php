<!-- Modal -->
<div class="modal" tabindex="-1" @if($crear) style="display:block" @endif aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Registro</h1>
      </div>
      <div class="modal-body">
        
      
              <div class="row">
                <div class="col-5 my-2">
                    <label for="nombre" class="col-form-label">Nombre</label>
                </div>
                <div class="col-7 my-2">
                    <input type="text" wire:model="nombre" class="form-control" required>
                    @error('nombre') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="row">
                  <div class="col-5 my-2">
                      <label for="fecha_nacimiento" class="col-form-label">Fecha de Nacimiento</label>
                  </div>
                  <div class="col-7 my-2">
                      <input type="date" wire:model="fecha_nacimiento" class="form-control" min="1930-01-01" max="2012-12-31" required>
                      @error('fecha_nacimiento') <div class="text-danger">{{ $message }}</div> @enderror
                  </div>
              </div>
              <div class="row">
                <div class="col-5 my-2">
                    <label for="sexo" class="col-form-label">Sexo</label>
                </div>
                <div class="col-7 my-2">
                    <select class="form-select" wire:model="sexo" required>
                        <option value="m" selected>Masculino</option>
                        <option value="f">Femenino</option>
                    </select>
                    @error('sexo') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="row">
                  <div class="col-5 my-2">
                      <label for="estatura" class="col-form-label">Estatura</label>
                  </div>
                  <div class="col-7 my-2">
                      <input type="number" wire:model="estatura" class="form-control" required>
                      @error('estatura') <div class="text-danger">{{ $message }}</div> @enderror
                  </div>
              </div>
              <div class="row">
                  <div class="col-5 my-2">
                      <label for="peso" class="col-form-label">Peso</label>
                  </div>
                  <div class="col-7 my-2">
                      <input type="number" wire:model="peso" class="form-control" required>
                      @error('peso') <div class="text-danger">{{ $message }}</div> @enderror
                  </div>
              </div>


      </div>
      <div class="modal-footer">
        <button type="button" wire:click="close_create" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button wire:click="registrar" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>

@if($crear)
<div class="modal-backdrop show"></div>

@endif