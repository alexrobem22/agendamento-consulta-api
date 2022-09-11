<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'pac_codigo',
        'pac_nome',
        'pac_telefones',
        'pac_dataNascimento'
    ];
    public function planosaude(){

        return $this->belongsToMany(PlanoSaude::class, 'vinculos', 'paciente_id', 'plano_saude_id');
    }
    public function vinculo(){
        return $this->hasMany(Vinculo::class, 'paciente_id','id');
    }
}
