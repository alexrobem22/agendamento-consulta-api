<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('vinculo_id')->nullable();
            $table->unsignedBigInteger('medico_id');
            $table->string('cons_codigo');
            $table->string('cons_data_hora');
            $table->string('particular');
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('vinculo_id')->references('id')->on('vinculos');
            $table->foreign('medico_id')->references('id')->on('medicos');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
