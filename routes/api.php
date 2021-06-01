<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\AntecedanjudiController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\EchelonsController;
use App\Http\Controllers\DisposController;
use App\Http\Controllers\DetachementsController;
use App\Http\Controllers\HorscadresController;
use App\Http\Controllers\MutationsController;
use App\Http\Controllers\MilitaryController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\RegimdisController;
use App\Http\Controllers\CessationController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\PostesupsController;
use App\Http\Controllers\FormationIntController;
use App\Http\Controllers\ExproController;
use App\Http\Controllers\FonctionsupController;







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

Route::get('/employees/getall/{id}',[EmployesController::class,'getAll']);
Route::get('/employee/create','EmployesController@create')->middleware(['web']);
Route::prefix('employee')->group(function(){
    Route::post('/store',[EmployesController::class,'store']);
    Route::get('/show/{id}',[EmployesController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[EmployesController::class,'update']);
});

Route::get('/parcour/getall/{id}',[ProfilesController::class,'getAll']);
Route::get('/employee/create','ProfilesController@create')->middleware(['web']);
Route::prefix('parcour')->group(function(){
    Route::post('/store',[ProfilesController::class,'store']);
    Route::get('/show/{id}',[ProfilesController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[ProfilesController::class,'update']);
});

Route::get('/formation/getall/{id}',[FormationController::class,'getAll']);
Route::get('/employee/create','FormationController@create')->middleware(['web']);
Route::prefix('formation')->group(function(){
    Route::post('/store',[FormationController::class,'store']);
    Route::get('/show/{id}',[FormationController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[FormationController::class,'update']);
});

Route::get('/formationint/getall/{id}',[FormationIntController::class,'getAll']);
Route::get('/employee/create','FormationIntController@create')->middleware(['web']);
Route::prefix('formationint')->group(function(){
    Route::post('/store',[FormationIntController::class,'store']);
    Route::get('/show/{id}',[FormationIntController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[FormationIntController::class,'update']);
});

Route::get('/antecejudi/getall/{id}',[AntecedanjudiController::class,'getAll']);
Route::prefix('/antecejudi')->group(function(){
    Route::post('/store',[AntecedanjudiController::class,'store']);
    Route::get('/show/{id}',[AntecedanjudiController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[AntecedanjudiController::class,'update']);
});

Route::get('/stage/getall/{id}',[StageController::class,'getAll']);
Route::prefix('stage')->group(function(){
    Route::post('/store',[StageController::class,'store']);
    Route::get('/show/{id}',[StageController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[StageController::class,'update']);
    
});

Route::get('/echelons/getall/{id}',[EchelonsController::class,'getAll']);
Route::prefix('echelons')->group(function(){
    Route::post('/store',[EchelonsController::class,'store']);
    Route::get('/show/{id}',[EchelonsController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[EchelonsController::class,'update']);
});


Route::get('/dispo/getall/{id}',[DisposController::class,'getAll']);
Route::prefix('dispo')->group(function(){
    Route::post('/store',[DisposController::class,'store']);
    Route::get('/show/{id}',[DisposController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[DisposController::class,'update']);
});

Route::get('/detachement/getall/{id}',[DetachementsController::class,'getAll']);
Route::prefix('detachement')->group(function(){
    Route::post('/store',[DetachementsController::class,'store']);
    Route::get('/show/{id}',[DetachementsController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[DetachementsController::class,'update']);
});

Route::get('/horscadre/getall/{id}',[HorscadresController::class,'getAll']);
Route::prefix('horscadre')->group(function(){
    Route::post('/store',[HorscadresController::class,'store']);
    Route::get('/show/{id}',[HorscadresController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[HorscadresController::class,'update']);
});


Route::get('/mutations/getall/{id}',[MutationsController::class,'getAll']);
Route::prefix('mutations')->group(function(){
    Route::post('/store',[MutationsController::class,'store']);
    Route::get('/show/{id}',[MutationsController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[MutationsController::class,'update']);
});


Route::get('/militaire/getall/{id}',[MilitaryController::class,'getAll']);
Route::prefix('militaire')->group(function(){
    Route::post('/store',[MilitaryController::class,'store']);
    Route::get('/show/{id}',[MilitaryController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[MilitaryController::class,'update']);
});

Route::get('/conge/getall/{id}',[CongeController::class,'getAll']);
Route::prefix('conge')->group(function(){
    Route::post('/store',[CongeController::class,'store']);
    Route::get('/show/{id}',[CongeController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[CongeController::class,'update']);
});

Route::get('/regim/getall/{id}',[RegimdisController::class,'getAll']);
Route::prefix('regim')->group(function(){
    Route::post('/store',[RegimdisController::class,'store']);
    Route::get('/show/{id}',[RegimdisController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[RegimdisController::class,'update']);
});

Route::get('/cessation/getall/{id}',[CessationController::class,'getAll']);
Route::prefix('cessation')->group(function(){
    Route::post('/store',[CessationController::class,'store']);
    Route::get('/show/{id}',[CessationController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[CessationController::class,'update']);
});

Route::get('/recrutement/getall/{id}',[RecrutementController::class,'getAll']);
Route::prefix('recrutement')->group(function(){
    Route::post('/store',[RecrutementController::class,'store']);
    Route::get('/show/{id}',[RecrutementController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[RecrutementController::class,'update']);
});

Route::get('/grade/getall/{id}',[GradesController::class,'getAll']);
Route::prefix('grade')->group(function(){
    Route::post('/store',[GradesController::class,'store']);
    Route::get('/show/{id}',[GradesController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[GradesController::class,'update']);
});

Route::get('/postesup/getall/{id}',[PostesupsController::class,'getAll']);
Route::prefix('postesup')->group(function(){
    Route::post('/store',[PostesupsController::class,'store']);
    Route::get('/show/{id}',[PostesupsController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[PostesupsController::class,'update']);
});

Route::get('/expro/getall/{id}',[ExproController::class,'getAll']);
Route::prefix('expro')->group(function(){
    Route::post('/store',[ExproController::class,'store']);
    Route::get('/show/{id}',[ExproController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[ExproController::class,'update']);
});

Route::get('/fonctionsups/getall/{id}',[FonctionsupController::class,'getAll']);
Route::prefix('fonctionsups')->group(function(){
    Route::post('/store',[FonctionsupController::class,'store']);
    Route::get('/show/{id}',[FonctionsupController::class,'show'])->middleware(['web']);
    Route::put('/update/{id}',[FonctionsupController::class,'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});