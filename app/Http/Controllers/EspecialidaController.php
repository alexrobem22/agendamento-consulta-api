<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Especialidade = Especialidade::all();

        return response()->json($Especialidade, 201);
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

            'espec_codigo' => 'required|numeric|unique:especialidades,espec_codigo',
            'espec_nome' => 'required|unique:especialidades,espec_nome',

        ];

        $feedback = [
            'required' => 'O campo :attribute Precisar ser prenchido',
            'unique' => 'O campo :attribute já existe',
            'numeric' => ' O campo :attribute deve ser numerico'
        ];

        $request->validate($regras, $feedback);

        $especialidade = Especialidade::create([
            'espec_codigo' => $request->espec_codigo,
            'espec_nome' => $request->espec_nome,
        ]);

       
        return response()->json($especialidade, 201);
    
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

        $Especialidade = Especialidade::find($id);

        if($Especialidade == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }

        return response()->json($Especialidade, 201);
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
        $especialidade = Especialidade::find($id);
        
        if($especialidade == null){
            return response()->json(['erro' => 'ID nao existe'], 404);
        }

        $regras = [

            'espec_codigo' => 'numeric|unique:especialidades,espec_codigo,'.$id,
            'espec_nome' => 'unique:especialidades,espec_nome,'.$id,

        ];

        $feedback = [
            'required' => 'O campo :attribute Precisar ser prenchido',
            'unique' => 'O campo :attribute já existe',
            'numeric' => ' O campo :attribute deve ser numerico'
        ];

        $request->validate($regras, $feedback);




        $especialidade->update([
            'espec_codigo' => ($request->espec_codigo) ? $request->espec_codigo : $especialidade->espec_codigo,
            'espec_nome' => ($request->espec_nome) ? $request->espec_nome : $especialidade->espec_nome,
        ]);

       
        return response()->json($especialidade, 201);
    
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
        $deletar = Especialidade::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'A Especialidade foi excluido com Sucesso!'], 201);
    
    }
}
