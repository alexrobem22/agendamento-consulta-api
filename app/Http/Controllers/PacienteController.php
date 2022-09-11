<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\PlanoSaude;
use App\Models\Vinculo;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paciente = Paciente::with('planosaude','vinculo')->get();
               
        return response()->json($paciente, 201);
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

        $paciente = Paciente::where('pac_codigo' , $request->pac_codigo)->first();
        
        if(isset($paciente)){

            $regras = [
                'plano_saude_id' => 'required|exists:plano_saudes,id',
                'nr_contrato' => 'required|numeric|unique:vinculos,nr_contrato',
            ];
            $feedback = [
                'required' => 'O campo :attribute e Obrigatorio',
                'unique' => 'O campo :attribute já Existe',
                'exists' => 'O campo :attribute não existe',
                'numeric' => ' O campo :attribute deve ser numerico'
               ];
        
               $request->validate($regras, $feedback);

               $vinculo = Vinculo::where('plano_saude_id', $request->plano_saude_id)->where('paciente_id',$paciente->id)->first();
               $planosaude = PlanoSaude::find(isset($vinculo->plano_saude_id));

               if($vinculo){
                return response()->json(['msg' => 'você ja tem o plano da '.$planosaude->plano_nome.' escolha outro'], 201);
               }else{

                $vinculo = Vinculo::create([
                    'paciente_id' => $paciente->id,
                    'plano_saude_id' => $request->plano_saude_id,
                    'nr_contrato' => $request->nr_contrato
                   ]);
    
                   $paciente = Paciente::with('planosaude','vinculo')->find($paciente->id);
                   
                   return response()->json($paciente, 201);
               }

        }else{
            // dd('oi');
            $regras = [
                'pac_codigo' => 'required|numeric|unique:pacientes,pac_codigo',
                'pac_nome' => 'required',
                'pac_telefones' => 'required|unique:pacientes,pac_telefones|celular_com_codigo',
                'pac_dataNascimento' => 'required|date_format:d/m/Y',

                'plano_saude_id' => 'required|exists:plano_saudes,id',
                'nr_contrato' => 'required|numeric|unique:vinculos,nr_contrato',
            ];
            $feedback = [
                'required' => 'O campo :attribute e Obrigatorio',
                'unique' => 'O campo :attribute já Existe',
                'exists' => 'O campo :attribute não existe',
                'numeric' => 'O campo :attribute so pode ser Numerico',
                'celular_com_codigo' => 'O campo :attribute tem que ser nesse formato +99(99)9999-9999',
                'date_format' => 'Digite o data nesse formato 01/12/2022'
            ];
        
               $request->validate($regras, $feedback);
    
               $paciente = Paciente::create([
                'pac_codigo' => $request->pac_codigo,
                'pac_nome' => $request->pac_nome,
                'pac_telefones' => $request->pac_telefones,
                'pac_dataNascimento' => $request->pac_dataNascimento
               ]);
    
               $vinculo = Vinculo::create([
                'paciente_id' => $paciente->id,
                'plano_saude_id' => $request->plano_saude_id,
                'nr_contrato' => $request->nr_contrato
               ]);

               $paciente = Paciente::with('planosaude','vinculo')->find($paciente->id);
               
               return response()->json($paciente, 201);

        }
        
     

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

        $paciente = Paciente::with('planosaude','vinculo')->find($id);

        if($paciente == null){
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
               
        return response()->json($paciente, 201);
        
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
                'pac_codigo' => 'numeric|unique:pacientes,pac_codigo,'.$id,
                'pac_nome' => '',
                'pac_telefones' => 'celular_com_codigo|unique:pacientes,pac_telefones,'.$id,
                'pac_dataNascimento' => 'date_format:d/m/Y',

                // 'plano_saude_id' => 'exists:plano_saudes,id',
                // 'nr_contrato' => 'unique:vinculos,nr_contrato,'.$id,
            ];
            $feedback = [
                'required' => 'O campo :attribute e Obrigatorio',
                'unique' => 'O campo :attribute já Existe',
                'exists' => 'O campo :attribute não existe',
                'numeric' => 'O campo :attribute so pode ser Numerico',
                'celular_com_codigo' => 'O campo :attribute tem que ser nesse formato +99(99)9999-9999',
                'date_format' => 'Digite o data nesse formato 01/12/2022'
            ];
        
               $request->validate($regras, $feedback);

               $paciente = Paciente::find($id);


    
               $paciente->update([
                'pac_codigo' => ($request->pac_codigo) ? $request->pac_codigo : $paciente->pac_codigo,
                'pac_nome' => ($request->pac_nome) ?  $request->pac_nome : $paciente->pac_nome,
                'pac_telefones' => ($request->pac_telefones) ?  $request->pac_telefones : $paciente->pac_telefones,
                'pac_dataNascimento' => ($request->pac_dataNascimento) ? $request->pac_dataNascimento : $paciente->pac_dataNascimento
               ]);

               $paciente = Paciente::with('planosaude','vinculo')->find($paciente->id);
               
               return response()->json($paciente, 201);

        
    }
    public function update_mudarplano(Request $request){
        // dd($request->pac_codigo);
        
        $paciente = Paciente::where('pac_codigo' , $request->pac_codigo)->first();
        if($paciente == null){
            return response()->json(['erro' => 'Codigo paciente não existe'], 404);
        }

        $vinculo = Vinculo::where('paciente_id', $paciente->id)->get();

        

        foreach($vinculo as $vinculos){

            if($vinculos->plano_saude_id == $request->plano_novo){
                $planosaude = PlanoSaude::where('id', $vinculos->plano_saude_id)->first();
                return response()->json(['msg' => 'você ja tem o plano da '.$planosaude->plano_nome.' escolha outro'], 201);
            }
        }

        $regras = [

            'plano_saude_id' => 'exists:plano_saudes,id',
            'nr_contrato' => 'numeric'
        ];
        $feedback = [

            'unique' => 'O campo :attribute já Existe',
            'exists' => 'O campo :attribute não existe',
            'numeric' => ' O campo :attribute deve ser numerico'
        ];
    
           $request->validate($regras, $feedback);

            $vinculo = Vinculo::where('paciente_id', $paciente->id)->where('plano_saude_id',$request->plano_saude_id)->first();
            // dd($vinculo->id);

            $vinculo->update([
                'paciente_id' => $vinculo->paciente_id,
                'plano_saude_id' => $request->plano_novo,
                'nr_contrato' => $vinculo->nr_contrato
            ]);
        
                $paciente = Paciente::with('planosaude','vinculo')->find($paciente->id);
                       
                return response()->json($paciente, 201);
           
     
        


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
        $deletar = Paciente::find($id);
        
        if($deletar == null){
            return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }
        $deletar->delete();

        return response()->json(['msg' => 'O paciente foi excluido com Sucesso!'], 201);
    
    }
}
