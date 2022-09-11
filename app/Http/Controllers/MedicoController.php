<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medico = Medico::with('especialidade')->get();
        
        return response()->json($medico, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $regras = [
            'especialidade_id' => 'required|exists:especialidades,id',
            'med_codigo' => 'required|numeric|unique:medicos,med_codigo',
            'med_nome' => 'required|unique:medicos,med_nome',
            'med_CRM' => 'required|numeric|unique:medicos,med_CRM'

        ];

        $feedback = [
            'required' => 'O campo :attribute Precisar ser prenchido',
            'unique' => 'O campo :attribute já existe',
            'exists' => 'O campo :attribute não existe',
            'numeric' => ' O campo :attribute deve ser numerico'
        ];

        $request->validate($regras, $feedback);

        $medico = Medico::create([
            'especialidade_id' => $request->especialidade_id,
            'med_codigo' => $request->med_codigo,
            'med_nome' => $request->med_nome,
            'med_CRM' => $request->med_CRM
        ]);

        $medico = Medico::with('especialidade')->find($medico->id);
       
        return response()->json($medico, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $medico = Medico::with('especialidade')->find($id);

        if($medico == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        
        return response()->json($medico, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->especialidade_id){
            $regras = [
                'especialidade_id' => 'exists:especialidades,id',
                'med_codigo' => 'numeric|unique:medicos,med_codigo,'.$id,
                'med_nome' => 'unique:medicos,med_nome,'.$id,
                'med_CRM' => 'numeric|unique:medicos,med_CRM,'.$id
    
            ];
        }else{
            $regras = [
                'med_codigo' => 'numeric|unique:medicos,med_codigo,'.$id,
                'med_nome' => 'unique:medicos,med_nome,'.$id,
                'med_CRM' => 'numeric|unique:medicos,med_CRM,'.$id
    
            ];
        }


        $feedback = [
            'required' => 'O campo :attribute Precisar ser prenchido',
            'unique' => 'O campo :attribute já existe',
            'exists' => 'O campo :attribute não existe',
            'numeric' => ' O campo :attribute deve ser numerico'
        ];

        $request->validate($regras, $feedback);

        $medico = Medico::find($id);

        $medico->update([
            'especialidade_id' => ($request->especialidade_id) ? $request->especialidade_id : $medico->especialidade_id,
            'med_codigo' => ($request->med_codigo) ? $request->med_codigo : $medico->med_codigo,
            'med_nome' => ($request->med_nome) ? $request->med_nome : $medico->med_nome,
            'med_CRM' => ($request->med_CRM) ? $request->med_CRM : $medico->med_CRM
        ]);

        $medico = Medico::with('especialidade')->find($medico->id);
       
        return response()->json($medico, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletar = Medico::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'O medico foi excluido com Sucesso!'], 201);
    
    }
}
