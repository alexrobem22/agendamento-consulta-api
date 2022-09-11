<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        
    'especialidade_id',
    'med_codigo',
    'med_nome',
    'med_CRM'
    
    ];

    public function especialidade(){

       return $this->hasMany(Especialidade::class, 'id','especialidade_id');
    }
}
