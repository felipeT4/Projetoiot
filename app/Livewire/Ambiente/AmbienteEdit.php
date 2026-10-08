<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
     public $nome;
    public $descricao;
    public $status;
  

    public function mount($id){
        $ambiente = Ambiente::find($id);
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
         $this->status = $ambiente->status;
        

    }
    public function update(){
    
      $ambiente = Ambiente::find($this->ambienteId);

          $ambiente->nome = $this->nome;
            $ambiente->ambiente = $this->ambiente;
             $ambiente->status = $this->nome;

               $ambiente->save();

                session()->flash('success', 'Atualizado');
        return redirect()->route('ambientes');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
