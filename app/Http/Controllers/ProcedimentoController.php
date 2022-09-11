<?php

namespace App\Http\Controllers;

use App\Models\Procedimento;
use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $procedimento = Procedimento::all();
        
        return response()->json($procedimento, 200);
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
            'proc_codigo' => 'required|numeric|unique:procedimentos,proc_codigo',
            'proc_nome' => 'required|unique:procedimentos,proc_nome',
            'proc_valor' => 'required|numeric',
            'proc_especialidade' => 'required|alpha'
        ];
        $feedback = [
            'required' => 'O campo :attribute e Obrigado',
            'numeric' => 'O campo :attribute e numerico',
            'unique' => 'O campo :attribute  já Existe',
            'alpha' => 'O campo  :attribute tem que ser A-Z'
        ];
        $request->validate($regras, $feedback);

        $procedimento = Procedimento::create([

            'proc_codigo' => $request->proc_codigo,
            'proc_nome' => $request->proc_nome,
            'proc_valor' => $request->proc_valor,
            'proc_especialidade' => $request->proc_especialidade

        ]);

        return response()->json($procedimento, 201);
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
        $procedimento = Procedimento::find($id);

        if($procedimento == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        
        return response()->json($procedimento, 201);
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

        $regras = [
            'proc_codigo' => 'numeric|unique:procedimentos,proc_codigo,'.$id,
            'proc_nome' => 'unique:procedimentos,proc_nome,'.$id,
            'proc_valor' => 'numeric',
            'proc_especialidade' => 'required|alpha'
        ];
        $feedback = [
            'required' => 'O campo :attribute e Obrigado',
            'numeric' => 'O campo :attribute e numerico',
            'unique' => 'O campo :attribute  já Existe',
            'alpha' => 'O campo  :attribute tem que ser A-Z'
        ];
        $request->validate($regras, $feedback);

        $procedimento = Procedimento::find($id);

        $procedimento->update([

            'proc_codigo' => ($request->proc_codigo) ? $request->proc_codigo : $procedimento->proc_codigo,
            'proc_nome' => ($request->proc_nome) ? $request->proc_nome : $procedimento->proc_nome,
            'proc_valor' => ($request->proc_valor) ? $request->proc_valor : $procedimento->proc_valor,
            'proc_especialidade' => ($request->proc_especialidade) ? $request->proc_especialidade : $procedimento->proc_especialidade

        ]);

        return response()->json($procedimento, 201);
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
        $deletar = Procedimento::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'O procedimento foi excluido com Sucesso!'], 201);
    
    }
}
