<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CriarUsuarioSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $senhanormal = 1234;
        $senha = bcrypt($senhanormal);
        $user = User::create([

            'name' => 'ti',
            'email' => 'ti@tisaude.com',
            'password' => $senha,
            'nivel_acesso' => 'adm',
            'status' => 'ativo',

        ]);
        $user = User::create([

                'name' => 'alex',
                'email' => 'alex17_sv@hotmail.com',
                'password' => $senha,
                'nivel_acesso' => 'funcionario',
                'status' => 'ativo', 

        ]);
        $user = User::create([

            'name' => 'teste',
            'email' => 'teste@hotmail.com',
            'password' => $senha,
            'nivel_acesso' => 'funcionario',
            'status' => 'desativado', 

    ]);


    }
}
