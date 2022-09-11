<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoSaude extends Model
{
    use HasFactory;

    protected $fillable = [
        
    'plan_codigo',
    'plano_nome',
    'plano_descricao',
    'plano_telefone'

    ];
}
