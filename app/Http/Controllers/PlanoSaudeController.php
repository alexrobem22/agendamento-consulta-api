<?php

namespace App\Http\Controllers;

use App\Models\PlanoSaude;
use Illuminate\Http\Request;

class PlanoSaudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planoSaude = PlanoSaude::all();
        
        return response()->json($planoSaude, 201);
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
        'plan_codigo' => 'required|numeric|unique:plano_saudes,plan_codigo',
        'plano_nome' => 'unique:plano_saudes,plano_nome',
        'plano_descricao' => 'required',
        'plano_telefone' => 'required|unique:plano_saudes,plano_telefone|celular_com_codigo'
       ];
       $feedback = [
        'required' => 'O campo :attribute e Obrigatorio',
        'unique' => 'O campo :attribute já Existe',
        'celular_com_codigo' => 'O campo :attribute tem que ser nesse formato +99(99)9999-9999',
        'numeric' => 'O campo :attribute so pode ser Numerico'
       ];

       $request->validate($regras, $feedback);

       $planoSaude = PlanoSaude::create([

        'plan_codigo' => $request->plan_codigo,
        'plano_nome' => $request->plano_nome,
        'plano_descricao' => $request->plano_descricao,
        'plano_telefone' => $request->plano_telefone

       ]);

       return response()->json($planoSaude, 201);
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
        $planoSaude = PlanoSaude::find($id);

        if($planoSaude == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        
        return response()->json($planoSaude, 201);
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
            'plano_nome' => 'unique:plano_saudes,plano_nome,'.$id,
            'plan_codigo' => 'numeric|unique:plano_saudes,plan_codigo,'.$id,
            'plano_telefone' => 'celular_com_codigo|unique:plano_saudes,plano_telefone,'.$id
           ];
           $feedback = [
            'required' => 'O campo :attribute e Obrigatorio',
            'unique' => 'O campo :attribute já Existe',
            'numeric' => 'O campo :attribute so pode ser Numerico',
            'celular_com_codigo' => 'O campo :attribute tem que ser nesse formato +99(99)9999-9999',
           ];
    
           $request->validate($regras, $feedback);

           $planoSaude = PlanoSaude::find($id);
    
           $planoSaude->update([
    
            'plan_codigo' => ($request->plan_codigo) ? $request->plan_codigo  : $planoSaude->plan_codigo,
            'plano_nome' => ($request->plano_nome) ? $request->plano_nome  : $planoSaude->plano_nome,
            'plano_descricao' => ($request->plano_descricao) ?  $request->plano_descricao : $planoSaude->plano_descricao,
            'plano_telefone' => ($request->plano_telefone) ?  $request->plano_telefone : $planoSaude->plano_telefone
    
           ]);
    
           return response()->json($planoSaude, 201);
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
        $deletar = PlanoSaude::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'O plano de saude foi excluido com Sucesso!'], 201);
    }
}
