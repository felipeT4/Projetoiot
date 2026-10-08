<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{

    public function render()
    {
         $sensores = Sensor::all();

        return view('livewire.sensor.sensor-index',
        compact('sensores'));
    }
    public function status($id){
        $sensor = Sensor::find($id);
        $sensor->status = !$sensor->status;
        $sensor->save();
    }
}
