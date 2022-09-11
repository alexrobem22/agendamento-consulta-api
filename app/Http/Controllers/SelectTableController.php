<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\PlanoSaude;
use App\Models\Procedimento;
use Illuminate\Http\Request;

class SelectTableController extends Controller
{
    //
    public function planoSaude(){
        $planoSaude = PlanoSaude::all();
        
        return response()->json($planoSaude, 201);
    }

    public function medico(){
        $medico = Medico::with('especialidade')->get();
        
        return response()->json($medico, 200);
    }

    public function procedimento(){
        $procedimento = Procedimento::all();
        
        return response()->json($procedimento, 200);
    }
}
