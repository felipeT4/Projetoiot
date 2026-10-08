<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{   
    public $ambiente_id;
    public $codigo;
    public $descricao;
    public $tipo;
    public $status;
    
    public function store(){
    Sensor::create([ 
    'ambiente_id' => $this -> ambiente_id,
    'codigo' => $this -> codigo,
    'descricao' => $this -> descricao,
    'tipo' => $this -> tipo,
    'status' => $this -> status

        ]);


          session()->flash('success','cadastrado');
         return redirect()->route('sensores');

    }

    public function render()
    {
        
        return view('livewire.sensor.sensor-create');
    }
}
