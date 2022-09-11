<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use App\Models\PlanoSaude;
use Illuminate\Database\Seeder;

class CadastrarDadosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $especialidade = Especialidade::create([
            'espec_codigo' => 1,
            'espec_nome' => 'cardiologista',
        ]);
        $especialidade = Especialidade::create([
            'espec_codigo' => 2,
            'espec_nome' => 'dermatologista',
        ]);
        $especialidade = Especialidade::create([
            'espec_codigo' => 3,
            'espec_nome' => 'psiquiatra',
        ]);
        $especialidade = Especialidade::create([
            'espec_codigo' => 4,
            'espec_nome' => 'ortopedista',
        ]);
        $especialidade = Especialidade::create([
            'espec_codigo' => 5,
            'espec_nome' => 'teste',
        ]);

        /**!plano de saude
         */
        $planoSaude = PlanoSaude::create([

            'plan_codigo' => '1',
            'plano_nome' => 'unimed',
            'plano_descricao' => 'muito bom',
            'plano_telefone' => '+55(11)1111-1111'
    
           ]);
        $planoSaude = PlanoSaude::create([

            'plan_codigo' => '2',
            'plano_nome' => 'teste',
            'plano_descricao' => 'ruim',
            'plano_telefone' => '+55(22)2222-2222'
    
           ]);
        $planoSaude = PlanoSaude::create([

            'plan_codigo' => '3',
            'plano_nome' => 'amil',
            'plano_descricao' => 'legal',
            'plano_telefone' => '+55(33)3333-3333'
    
           ]);
        $planoSaude = PlanoSaude::create([

            'plan_codigo' => '4',
            'plano_nome' => 'portugues',
            'plano_descricao' => 'excelente',
            'plano_telefone' => '+55(44)4444-4444'
    
           ]);
    }
}
