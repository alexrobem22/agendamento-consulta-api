<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function login(Request $request){
        
        $user = User::where('email', $request->email)->first();

        if($user == null){

            return response()->json(['msg' => 'E-mail ou Senha incorreta'], 403);

        }

        if($user->nivel_acesso == 'adm' && $user->status == 'ativo'){

            $credenciais = $request->all(['email', 'password']);
            $token = auth('api')->attempt($credenciais); //attempt ele tenta fazer autenticacao

            if ($token) { //usuario autenticado com sucesso

                $user = User::where('email', $request->email)->first();
                return response()->json(['token' => $token, 'usuario' => $user], 200);

            }

        }elseif($user->nivel_acesso == 'funcionario' && $user->status == 'ativo'){

            $credenciais = $request->all(['email', 'password']);
            $token = auth('api')->attempt($credenciais); //attempt ele tenta fazer autenticacao

            if ($token) { //usuario autenticado com sucesso

                $user = User::where('email', $request->email)->first();
                return response()->json(['token' => $token, 'usuario' => $user], 200);

            }

        }else{
            return response()->json(['msg' => 'Sua conta pode estar Desativada entre em contato com o suport'], 403);
        }
        

    }
      /**
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
     * logout usuario funcionario
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
     *
     */
    public function logoutfuncionario(){

        auth('api')->logout();
        return response()->json(['msg' => ' O logout foi realizado com sucesso'], 200);

    }
     /**
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
     * logout usuario adm
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
     *
     */
    public function logoutadm(){
        auth('api')->logout();
        return response()->json(['msg' => ' O logout foi realizado com sucesso'], 200);
    }
}
