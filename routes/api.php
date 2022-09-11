<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsProcController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EspecialidaController;
use App\Http\Controllers\EspecialidadeMedicoController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PlanoSaudeController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\SelectTableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 * ROUTE OF LOGIN
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 */
Route::post('login', [AuthController::class, 'login'])->name('login');



/**
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 * ROUTE OF USER-func
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 */
Route::middleware('func','jwt.auth')->prefix('func/')->group(function(){

    Route::post('logoutfuncionario', [ AuthController::class, 'logoutfuncionario'])->name('logout.funcionario');

    Route::resource('cadastro/paciente', PacienteController::class);
    Route::post('mudar/planoSaude', [PacienteController::class , 'update_mudarplano'])->name('mudar.planosaude');
    Route::resource('cadastro/consulta', ConsultaController::class);
    Route::resource('cadastro/cons_proc', ConsProcController::class);

    // INDEX PLANO_SAUDE
        Route::get('selecttable/plano_saude',[SelectTableController::class, 'planoSaude'])->name('selecttable.palnosaude');

    // INDEX MEDICO
        Route::get('selecttable/medico',[SelectTableController::class, 'medico'])->name('selecttable.medico');

    // INDEX PROCEDIMENTO
        Route::get('selecttable/procedimento',[SelectTableController::class, 'procedimento'])->name('selecttable.procedimento');
});

/**
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 * ROUTE OF USER-adm
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 */
    Route::middleware('adm','jwt.auth')->prefix('adm/')->group(function(){

    Route::post('logoutadm', [ AuthController::class, 'logoutadm'])->name('logout.adm');

    Route::resource('cadastro/especialidade', EspecialidaController::class);
    Route::resource('cadastro/medico', MedicoController::class);
    Route::resource('cadastro/planosaude', PlanoSaudeController::class);
    Route::resource('cadastro/paciente', PacienteController::class);
    Route::post('mudar/planoSaude', [PacienteController::class , 'update_mudarplano'])->name('mudar.planosaude');
    Route::resource('cadastro/procedimento', ProcedimentoController::class);
    Route::resource('cadastro/consulta', ConsultaController::class);
    Route::resource('cadastro/cons_proc', ConsProcController::class);


});
// Route::resource('cadastro/especialidade/medico', EspecialidadeMedicoController::class);







