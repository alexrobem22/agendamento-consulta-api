<?php

namespace Database\Seeders;

use App\Models\Procedimento;
use Illuminate\Database\Seeder;

class ProcedimentoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $procedimento = Procedimento::create([

            'proc_codigo' => '1',
            'proc_nome' => 'eletrograma',
            'proc_valor' => '100.00',
            'proc_especialidade' => 'cardiologista'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '2',
            'proc_nome' => 'eletro',
            'proc_valor' => '50.00',
            'proc_especialidade' => 'cardiologista'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '3',
            'proc_nome' => 'pele geral',
            'proc_valor' => '40.00',
            'proc_especialidade' => 'dermatologista'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '4',
            'proc_nome' => 'pele especifica',
            'proc_valor' => '40.00',
            'proc_especialidade' => 'dermatologista'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '5',
            'proc_nome' => 'doenças pisicologica',
            'proc_valor' => '40.00',
            'proc_especialidade' => 'psiquiatra'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '5',
            'proc_nome' => 'doenças pisicologica criança',
            'proc_valor' => '100.00',
            'proc_especialidade' => 'psiquiatra'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '6',
            'proc_nome' => 'cintura para baixo',
            'proc_valor' => '500.00',
            'proc_especialidade' => 'ortopedista'

        ]);
        $procedimento = Procedimento::create([

            'proc_codigo' => '7',
            'proc_nome' => 'cintura para cima',
            'proc_valor' => '2000.00',
            'proc_especialidade' => 'ortopedista'
        ]);
    }
}
