<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsProc extends Model
{
    use HasFactory;

    protected $fillable = [
        'consulta_id',
        'procedimento_id',
        'valorConsulta'
    ];

    public function conspaciente(){
        return $this->hasMany(Consulta::class, 'id', 'consulta_id');
    }
    public function consprocedimento(){
        return $this->hasMany(Procedimento::class, 'id', 'procedimento_id');
    }
}
