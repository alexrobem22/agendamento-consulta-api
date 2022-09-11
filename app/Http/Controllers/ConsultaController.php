<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Vinculo;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            
        $consulta = Consulta::with('paciente','vinculo','medico')->get();
               
        return response()->json($consulta, 201);
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
        if($request->vinculos_id){
            $regras = [
                'paciente_id' => 'required|exists:pacientes,id',
                'vinculo_id' => 'exists:vinculos,id',
                'medico_id' => 'required|exists:medicos,id',
                'cons_codigo' => 'required|numeric|unique:consultas,cons_codigo',
                'cons_data_hora' => 'required|date_format:d/m/Y-H:i|unique:consultas,cons_data_hora'

            ];
        }else{
            $regras = [
                'paciente_id' => 'required|exists:pacientes,id',
                'medico_id' => 'required|exists:medicos,id',
                'cons_codigo' => 'required|numeric|unique:consultas,cons_codigo',
                'cons_data_hora' => 'required|date_format:d/m/Y-H:i|unique:consultas,cons_data_hora'
            ];
        }


        $feedback = [
            'required' => 'O campo :attribute e Obrigatorio',
            'exists' => 'O campo :attribute não existe',
            'numeric' => ' O campo :attribute deve ser numerico',
            'alpha' => ' O campo :attribute deve ser A-Z',
            'date_format' => ' O campo :attribute deve ser 01/02/2020-13:40',
            'unique' => 'o campo :attribute já existe'

        ];
        $request->validate($regras, $feedback);

        $vinculo = Vinculo::where('paciente_id',$request->paciente_id)->where('id',$request->vinculo_id)->first();


            if($request->vinculo_id){
                if($vinculo == null){
                    return response()->json(['msg' => 'você nao possui o plano de saude selecionado'],422);
                }
    
                $consulta = Consulta::create([
                    'paciente_id' => $request->paciente_id,
                    'vinculo_id' => $request->vinculo_id,
                    'medico_id' => $request->medico_id,
                    'cons_codigo' => $request->cons_codigo,
                    'cons_data_hora' => $request->cons_data_hora,
                    'particular' => 'nao'
                ]);

            }else{
                $consulta = Consulta::create([
                    'paciente_id' => $request->paciente_id,
                    'vinculo_id' => $request->vinculo_id,
                    'medico_id' => $request->medico_id,
                    'cons_codigo' => $request->cons_codigo,
                    'cons_data_hora' => $request->cons_data_hora,
                    'particular' => 'sim'
                ]);
            }

        $consulta = Consulta::with('paciente','vinculo','medico')->find($consulta->id);


        return response()->json($consulta, 201);
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
        
        $consulta = Consulta::with('paciente','vinculo','medico')->find($id);

        if($consulta == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
               
        return response()->json($consulta, 201);
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
            'paciente_id' => 'exists:pacientes,id',
            'vinculo_id' => 'exists:vinculos,id',
            'medico_id' => 'exists:medicos,id',
            'cons_codigo' => 'numeric|unique:consultas,cons_codigo,'.$id,
            'cons_data_hora' => 'date_format:d/m/Y-H:i|unique:consultas,cons_data_hora,'.$id

        ];
    $feedback = [
        'required' => 'O campo :attribute e Obrigatorio',
        'exists' => 'O campo :attribute não existe',
        'numeric' => ' O campo :attribute deve ser numerico',
        'alpha' => ' O campo :attribute deve ser A-Z',
        'date_format' => ' O campo :attribute deve ser 01/02/2020-13:40',
        'unique' => 'o campo :attribute já existe'

    ];
    $request->validate($regras, $feedback);

        $consulta = Consulta::find($id);
        if($consulta == null){
            return response()->json(['msg' => 'esse ID nao existe digite o id correto'], 422);
        }

        $vinculo = Vinculo::where('paciente_id',$request->paciente_id)->where('id',$request->vinculo_id)->first();

            if($request->vinculo_id){
                if($vinculo == null){
                    return response()->json(['msg' => 'você nao possui o plano de saude selecionado'],422);
                }
                $consulta->update([
                    'paciente_id' => ($request->paciente_id) ?  $request->paciente_id : $consulta->paciente_id,
                    'vinculo_id' => ($request->vinculo_id) ? $request->vinculo_id  : $consulta->vinculo_id,
                    'medico_id' => ($request->medico_id) ?  $request->medico_id : $consulta->medico_id,
                    'cons_codigo' => ($request->cons_codigo) ? $request->cons_codigo  : $consulta->cons_codigo,
                    'cons_data_hora' => ($request->cons_data_hora) ? $request->cons_data_hora : $consulta->cons_data_hora,
                    'particular' => 'nao'
                ]);

            }else{
                $consulta->update([
                    'paciente_id' => ($request->paciente_id) ? $request->paciente_id  : $consulta->paciente_id,
                    'vinculo_id' => ($request->vinculo_id) ?  $request->vinculo_id : $consulta->vinculo_id,
                    'medico_id' => ($request->medico_id) ?  $request->medico_id : $consulta->medico_id,
                    'cons_codigo' => ($request->cons_codigo) ? $request->cons_codigo  : $consulta->cons_codigo,
                    'cons_data_hora' => ($request->cons_data_hora) ? $request->cons_data_hora  : $consulta->cons_data_hora,
                    'particular' => 'sim'
                ]);
            }

        $consulta = Consulta::with('paciente','vinculo','medico')->find($consulta->id);


        return response()->json($consulta, 201);
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
        $deletar = Consulta::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'A consulta foi excluido com Sucesso!'], 201);
    
    }
}
