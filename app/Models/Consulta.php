<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [

        'paciente_id',
        'vinculo_id',
        'medico_id',
        'cons_codigo',
        'cons_data_hora',
        'particular'
        
    ];
    public function paciente(){

        return $this->hasMany(Paciente::class, 'id','paciente_id');
     }
     public function vinculo(){

        return $this->hasMany(Vinculo::class, 'id','vinculo_id');
     }
     public function medico(){

        return $this->hasMany(Medico::class, 'id','medico_id');
     }
}
