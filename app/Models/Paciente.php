<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';

    protected $fillable = [
        'nombre', 'fecha_nacimiento', 'sexo', 'estatura', 'peso'
    ];

    public $timestamps = false;


    public function recomendacion(){

        if( Carbon::parse($this->fecha_nacimiento)->age < 18 ){

            $collection=collect($this->fibonacci($this->estatura));
            $fibonacci_cercano_abajo = $collection->last(fn($item) => ($item < $this->estatura) ? $item : "" );
        
            return 
                "Hola $this->nombre eres ". (($this->sexo=='m') ? "un" : "una") ." joven muy saludable,
                te recomiendo salir a jugar al aire libre durante $fibonacci_cercano_abajo horas
                diarias"
                ;
        }
        elseif( Carbon::parse($this->fecha_nacimiento)->age >= 18 ){
            $año=Carbon::parse($this->fecha_nacimiento)->format('y');
            return 
                "Hola $this->nombre eres una persona muy saludable, te
                recomiendo comer ".(($this->peso <30) ? "más" : "menos" )." y salir a correr ".round(sqrt($año),2)." km
                diarios"
                ;
        }
        
    }

    function fibonacci($numero, $primero = 0, $segundo = 1)
    {
        $fib = [$primero, $segundo];
        for($i=1;$i<$numero;$i++)
        {
            $fib[] = $fib[$i]+$fib[$i-1];
        }
        return $fib;
    }
    

}
