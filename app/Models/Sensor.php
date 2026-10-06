<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ambiente_id',
        'codigo',// TEMPO2, LED01... 
        'tipo',// led, temperatura...
        'dscricao',
        'status'// ativo ou inativo
    ];

    public function regitros(){
    return $this->hasMany(Registro::class);
    }

    public function ambientes(){
        return $this->hasMany(Ambiente::class);
    }

        
}
