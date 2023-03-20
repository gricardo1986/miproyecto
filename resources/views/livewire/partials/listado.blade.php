<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Registro de Historias Médicas
        </div>
        <div class="card-body">

            <button wire:click="create" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Crear Nuevo Paciente">
                <i class="fa-sharp fa-solid fa-user-plus"></i>
            </button>

            <table class="table caption-top">
                <caption>Listado de Pacientes</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Estatura</th>
                        <th scope="col">Peso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pacientes as $paciente)
                        <tr key="{{ $paciente->id }}">
                            <th scope="row">{{ $paciente->id }}</th>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->fecha_nacimiento }}</td>
                            <td>{!! 
                                ($paciente->sexo=='m')? 
                                '<i data-bs-toggle="tooltip"  data-bs-placement="top" data-bs-title="Masculino" class="fa-sharp fa-solid fa-person"></i>' : 
                                '<i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Femenino" class="fa-sharp fa-solid fa-person-dress"></i>' !!}</td>
                            <td>{{ $paciente->estatura }}</td>
                            <td>{{ $paciente->peso }}</td>
                            <td>
                                <button data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ver Detalle de historia de Paciente"
                                wire:click="detail({{$paciente->id}})" wire:target="detail({{$paciente->id}})" wire:loading.class="detail({{$paciente->id}}) btn btn-info" class="btn btn-success" wire:loading.attr="disabled">
                                    <i wire:loading.remove wire:target="detail({{$paciente->id}})"  class="fa-sharp fa-solid fa-address-card"></i>
                                    <i wire:loading wire:target="detail({{$paciente->id}})" class="fa-sharp fa-solid fa-rotate"></i>
                                </button>
                                
                                <button data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar un Paciente" wire:click="edit({{$paciente->id}})" class="btn btn-warning"><i class="fa-sharp fa-solid fa-user-pen"></i></button>
                                <button data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar un Paciente" wire:click="destroy({{$paciente->id}})" class="btn btn-danger"><i class="fa-sharp fa-solid fa-user-xmark"></i></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $pacientes->links() }}
        </div>
    </div>
</div>