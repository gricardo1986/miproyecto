<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Paciente;

class Historias extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $nombre;
    public $fecha_nacimiento;
    public $sexo;
    public $estatura;
    public $peso;

    public $idpaciente;
    public $updnombre;
    public $updfecha_nacimiento;
    public $updsexo;
    public $updestatura;
    public $updpeso;

    public $crear=false;
    public $editar=false;
    public $detalle=false;

    public $datos_detalle;

    public function render()
    {
        return view('livewire.historias',[
        	'pacientes' => Paciente::orderBy("id","DESC")->paginate(5),
        ]);
    }

    public function create(){
    	$this->crear=true;
    }

    public function registrar(){

        $this->validate(
            [
                'nombre' => 'required|min:3',
                'fecha_nacimiento' => 'required',
                'sexo' => 'required',
                'estatura' => 'required|integer',
                'peso' => 'required'
            ],
            [
                'nombre.required' => 'Nombre es requerido.',
                'nombre.min' => 'Nombre debe tener al menos 5 cáracteres.',
                'fecha_nacimiento.required' => 'Fecha de Nacimiento es requerido.',
                'sexo.required' => 'Sexo es requerido.',
                'estatura.required' => 'Estatura es requerido.',
                'peso.required' => 'Peso es requerido.'
            ]
        );

        $paciente=Paciente::create([
            "nombre"=>$this->nombre,
            "fecha_nacimiento"=>$this->fecha_nacimiento,
            "sexo"=>$this->sexo,
            "estatura"=>$this->estatura,
            "peso"=>$this->peso,
        ]);

        $this->reset(["nombre","fecha_nacimiento","sexo","estatura","peso"]);
    }

    public function close_create(){
        $this->crear=false;
    }


    public function edit($id){
    	$this->editar=true;

        $paciente=Paciente::find($id);

        $this->idpaciente=$id;
        $this->updnombre=$paciente->nombre;
        $this->updfecha_nacimiento=$paciente->fecha_nacimiento;
        $this->updsexo=$paciente->sexo;
        $this->updestatura=$paciente->estatura;
        $this->updpeso=$paciente->peso;
    }

    public function update($id){

        $this->validate(
            [
                'updnombre' => 'required|min:3',
                'updfecha_nacimiento' => 'required',
                'updsexo' => 'required',
                'updestatura' => 'required',
                'updpeso' => 'required'
            ],
            [
                'updnombre.required' => 'Nombre es requerido.',
                'updnombre.min' => 'Nombre debe tener al menos 5 cáracteres.',
                'updfecha_nacimiento.required' => 'Fecha de Nacimiento es requerido.',
                'updsexo.required' => 'Sexo es requerido.',
                'updestatura.required' => 'Estatura es requerido.',
                'updpeso.required' => 'Peso es requerido.'
            ]
        );

        $paciente=Paciente::where('id', $id)
        ->update([
            "nombre"=>$this->updnombre,
            "fecha_nacimiento"=>$this->updfecha_nacimiento,
            "sexo"=>$this->updsexo,
            "estatura"=>$this->updestatura,
            "peso"=>$this->updpeso,
        ]);

        $this->editar=false;
        $this->reset(["updnombre","updfecha_nacimiento","updsexo","updestatura","updpeso"]);
    }

    public function close_edit(){
        $this->editar=false;
    }


    public function detail($id){

        $this->detalle=true;
        $paciente=Paciente::find($id);
        $this->datos_detalle=[
            "paciente"=>$paciente->toArray(),
            "recomendaciones"=>$paciente->recomendacion()
        ];

    }

    public function close_detail(){
        $this->detalle=false;
        $this->datos_detalle="";
    }

    public function destroy($id){
    	Paciente::destroy($id);
    }
}
