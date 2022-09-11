<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsProcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cons_procs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consulta_id');
            $table->unsignedBigInteger('procedimento_id');
            $table->string('valorConsulta');
            $table->timestamps();

            $table->foreign('consulta_id')->references('id')->on('consultas');
            $table->foreign('procedimento_id')->references('id')->on('procedimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cons_procs');
    }
}
