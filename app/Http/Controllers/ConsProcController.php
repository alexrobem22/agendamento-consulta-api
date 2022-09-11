<?php

namespace App\Http\Controllers;

use App\Models\ConsProc;
use App\Models\Consulta;
use App\Models\Especialidade;
use App\Models\Procedimento;
use Illuminate\Http\Request;

class ConsProcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consProc = ConsProc::with('conspaciente','consprocedimento')->get();

        return response()->json($consProc, 201);
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
            'consulta_id' => 'required|exists:consultas,id',
            'procedimento_id' => 'required|exists:procedimentos,id',
        ];
        $feedback = [
            'required' => 'O campo :attribute e Obrigatorio',
            'consulta_id.exists' => 'Esta consulta nao existe',
            'procedimento_id.exists' => 'Este procedimento nao existe',
        ];
        $request->validate($regras, $feedback);

        $consulta = Consulta::with('paciente','vinculo','medico')->where('id', $request->consulta_id)->first();
        $especialidade = Especialidade::find($consulta->medico[0]->especialidade_id);

        $procedimento = Procedimento::find($request->procedimento_id);


        if($especialidade->espec_nome == $procedimento->proc_especialidade){
            if($consulta->particular == 'nao'){
                
                $consProc = ConsProc::create([
                    'consulta_id' => $request->consulta_id,
                    'procedimento_id' => $request->procedimento_id,
                    'valorConsulta' => $procedimento->proc_valor
                ]);

            }else{

                    $total = 100 + $procedimento->proc_valor;
                    $consProc = ConsProc::create([
                    'consulta_id' => $request->consulta_id,
                    'procedimento_id' => $request->procedimento_id,
                    'valorConsulta' => $total
                ]);
            }
        }
        else{
            return response()->json(['msg' => 'O Dr. '.$consulta->medico[0]->med_nome.' tem a especialidade em '.$especialidade->espec_nome.' e não pode fazer procedimento fora de sua especialidade, você esta escolhendo a especialidade '.$procedimento->proc_especialidade.' por favor escolher a compativel']);
        }
        $consProc = ConsProc::with('conspaciente','consprocedimento')->find($consProc->id);

        return response()->json($consProc, 201);
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
        $consProc = ConsProc::with('conspaciente','consprocedimento')->find($id);
        if($consProc == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        return response()->json($consProc, 201);
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
            'consulta_id' => 'exists:consultas,id',
            'procedimento_id' => 'exists:procedimentos,id',
        ];
        $feedback = [
            'required' => 'O campo :attribute e Obrigatorio',
            'consulta_id.exists' => 'Esta consulta nao existe',
            'procedimento_id.exists' => 'Este procedimento nao existe',
        ];
        $request->validate($regras, $feedback);

        $consulta = Consulta::with('paciente','vinculo','medico')->where('id', $request->consulta_id)->first();
        $especialidade = Especialidade::find($consulta->medico[0]->especialidade_id);

        $procedimento = Procedimento::find($request->procedimento_id);

        $consProc = ConsProc::find($id);

        if($especialidade->espec_nome == $procedimento->proc_especialidade){
            if($consulta->particular == 'nao'){
                
                $consProc->update([
                    'consulta_id' => ($request->consulta_id) ?  $request->consulta_id : $consProc->consulta_id,
                    'procedimento_id' => ($request->procedimento_id) ? $request->procedimento_id  : $consProc->procedimento_id,
                    'valorConsulta' => ($procedimento->proc_valor) ? $procedimento->proc_valor  : $consProc->proc_valor
                ]);

            }else{

                    $total = 100 + $procedimento->proc_valor;
                    $consProc->update([
                    'consulta_id' => ($request->consulta_id) ?  $request->consulta_id : $consProc->consulta_id,
                    'procedimento_id' => ($request->procedimento_id) ? $request->procedimento_id  : $consProc->procedimento_id,
                    'valorConsulta' => ($total) ? $total : $consProc->valorConsulta
                ]);
            }
        }
        else{
            return response()->json(['msg' => 'O Dr. '.$consulta->medico[0]->med_nome.' tem a especialidade em '.$especialidade->espec_nome.' e não pode fazer procedimento fora de sua especialidade, você esta escolhendo a especialidade '.$procedimento->proc_especialidade.' por favor escolher a compativel']);
        }
        $consProc = ConsProc::with('conspaciente','consprocedimento')->find($consProc->id);

        return response()->json($consProc, 201);

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

        $deletar = ConsProc::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'O agendamento da consulta foi excluido com Sucesso!'], 201);
    }
}
