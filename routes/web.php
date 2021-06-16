<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\EmployesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\AntecedanjudiController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\EchelonsController;
use App\Http\Controllers\DisposController;
use App\Http\Controllers\DetachementsController;
use App\Http\Controllers\MutationsController;
use App\Http\Controllers\HorscadresController;
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
use App\Http\Controllers\DispositionsController;
use App\Http\Controllers\ChildsController;
use App\Http\Controllers\SpoucesController;
use App\Http\Controllers\LanguageController;
// use App\Http\Controllers\GradesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[EmployesController::class,'index'])->middleware(['auth']);
Route::get('/employe/getall',[EmployesController::class,'getAll'])->middleware(['auth']);
Route::get('/employe/create',[EmployesController::class,'create'])->middleware(['auth']);
Route::post('/employe/store',[EmployesController::class,'store'])->middleware(['auth']);
Route::get('/employe/edit/{employee_id}',[EmployesController::class,'edit'])->middleware(['auth']);
Route::get('/employe/show/{employee_id}',[EmployesController::class,'show'])->middleware(['auth']);

Route::get('/parcour/{employee_id}',[ProfilesController::class,'index'])->middleware(['auth']);
// Route::get('/parcour/employee_id/getall',[ProfilesController::class,'getAll'])->middleware(['auth']);
Route::get('/parcour/create/{employee_id}',[ProfilesController::class,'create'])->middleware(['auth']);
Route::post('/parcour/store',[ProfilesController::class,'store'])->middleware(['auth']);
Route::get('/parcour/edit/{parcour_id}',[ProfilesController::class,'edit'])->middleware(['auth']);
// Route::get('/parcour/show/{parcoure_id}',[ProfilesController::class,'show'])->middleware(['auth']);

Route::get('/formation/{employee_id}',[FormationController::class,'index'])->middleware(['auth']);
Route::get('/formation/create/{employee_id}',[FormationController::class,'create'])->middleware(['auth']);
Route::post('/formation/store',[FormationController::class,'store'])->middleware(['auth']);
Route::get('/formation/edit/{parcour_id}',[FormationController::class,'edit'])->middleware(['auth']);

Route::get('/formationint/{employee_id}',[FormationIntController::class,'index'])->middleware(['auth']);
Route::get('/formationint/create/{employee_id}',[FormationIntController::class,'create'])->middleware(['auth']);
Route::post('/formationint/store',[FormationIntController::class,'store'])->middleware(['auth']);
Route::get('/formationint/edit/{parcour_id}',[FormationIntController::class,'edit'])->middleware(['auth']);

Route::get('/antecejudi/{employee_id}',[AntecedanjudiController::class,'index'])->middleware(['auth']);
Route::get('/antecejudi/create/{employee_id}',[AntecedanjudiController::class,'create'])->middleware(['auth']);
Route::post('/antecejudi/store',[AntecedanjudiController::class,'store'])->middleware(['auth']);
Route::get('/antecejudi/edit/{parcour_id}',[AntecedanjudiController::class,'edit'])->middleware(['auth']);

Route::get('/stage/{employee_id}',[StageController::class,'index'])->middleware(['auth']);
Route::get('/stage/create/{employee_id}',[StageController::class,'create'])->middleware(['auth']);
Route::post('/stage/store',[StageController::class,'store'])->middleware(['auth']);
Route::get('/stage/edit/{parcour_id}',[StageController::class,'edit'])->middleware(['auth']);


Route::get('/echelons/{employee_id}',[EchelonsController::class,'index'])->middleware(['auth']);
Route::get('/echelons/create/{employee_id}',[EchelonsController::class,'create'])->middleware(['auth']);
Route::post('/echelons/store',[EchelonsController::class,'store'])->middleware(['auth']);
Route::get('/echelons/edit/{parcour_id}',[EchelonsController::class,'edit'])->middleware(['auth']);

Route::get('/dispo/{employee_id}',[DisposController::class,'index'])->middleware(['auth']);
Route::get('/dispo/create/{employee_id}',[DisposController::class,'create'])->middleware(['auth']);
Route::post('/dispo/store',[DisposController::class,'store'])->middleware(['auth']);
Route::get('/dispo/edit/{parcour_id}',[DisposController::class,'edit'])->middleware(['auth']);


Route::get('/detachement/{employee_id}',[DetachementsController::class,'index'])->middleware(['auth']);
Route::get('/detachement/create/{employee_id}',[DetachementsController::class,'create'])->middleware(['auth']);
Route::post('/detachement/store',[DetachementsController::class,'store'])->middleware(['auth']);
Route::get('/detachement/edit/{parcour_id}',[DetachementsController::class,'edit'])->middleware(['auth']);

Route::get('/horscadre/{employee_id}',[HorscadresController::class,'index'])->middleware(['auth']);
Route::get('/horscadre/create/{employee_id}',[HorscadresController::class,'create'])->middleware(['auth']);
Route::post('/horscadre/store',[HorscadresController::class,'store'])->middleware(['auth']);
Route::get('/horscadre/edit/{parcour_id}',[HorscadresController::class,'edit'])->middleware(['auth']);



Route::get('/mutations/{employee_id}',[MutationsController::class,'index'])->middleware(['auth']);
Route::get('/mutations/create/{employee_id}',[MutationsController::class,'create'])->middleware(['auth']);
Route::post('/mutations/store',[MutationsController::class,'store'])->middleware(['auth']);
Route::get('/mutations/edit/{parcour_id}',[MutationsController::class,'edit'])->middleware(['auth']);

Route::get('/militaire/{employee_id}',[MilitaryController::class,'index'])->middleware(['auth']);
Route::get('/militaire/create/{employee_id}',[MilitaryController::class,'create'])->middleware(['auth']);
Route::post('/militaire/store',[MilitaryController::class,'store'])->middleware(['auth']);
Route::get('/militaire/edit/{parcour_id}',[MilitaryController::class,'edit'])->middleware(['auth']);

Route::get('/conge/{employee_id}',[CongeController::class,'index'])->middleware(['auth']);
Route::get('/conge/create/{employee_id}',[CongeController::class,'create'])->middleware(['auth']);
Route::post('/conge/store',[CongeController::class,'store'])->middleware(['auth']);
Route::get('/conge/edit/{parcour_id}',[CongeController::class,'edit'])->middleware(['auth']);

Route::get('/regim/{employee_id}',[RegimdisController::class,'index'])->middleware(['auth']);
Route::get('/regim/create/{employee_id}',[RegimdisController::class,'create'])->middleware(['auth']);
Route::post('/regim/store',[RegimdisController::class,'store'])->middleware(['auth']);
Route::get('/regim/edit/{parcour_id}',[RegimdisController::class,'edit'])->middleware(['auth']);

Route::get('/cessation/{employee_id}',[CessationController::class,'index'])->middleware(['auth']);
Route::get('/cessation/create/{employee_id}',[CessationController::class,'create'])->middleware(['auth']);
Route::post('/cessation/store',[CessationController::class,'store'])->middleware(['auth']);
Route::get('/cessation/edit/{parcour_id}',[CessationController::class,'edit'])->middleware(['auth']);


Route::get('/recrutement/{employee_id}',[RecrutementController::class,'index'])->middleware(['auth']);
Route::get('/recrutement/create/{employee_id}',[RecrutementController::class,'create'])->middleware(['auth']);
Route::post('/recrutement/store',[RecrutementController::class,'store'])->middleware(['auth']);
Route::get('/recrutement/edit/{parcour_id}',[RecrutementController::class,'edit'])->middleware(['auth']);

Route::get('/grade/{employee_id}',[GradesController::class,'index'])->middleware(['auth']);
Route::get('/grade/create/{employee_id}',[GradesController::class,'create'])->middleware(['auth']);
Route::post('/grade/store',[GradesController::class,'store'])->middleware(['auth']);
Route::get('/grade/edit/{parcour_id}',[GradesController::class,'edit'])->middleware(['auth']);


Route::get('/postesup/{employee_id}',[PostesupsController::class,'index'])->middleware(['auth']);
Route::get('/postesup/create/{employee_id}',[PostesupsController::class,'create'])->middleware(['auth']);
Route::post('/postesup/store',[PostesupsController::class,'store'])->middleware(['auth']);
Route::get('/postesup/edit/{parcour_id}',[PostesupsController::class,'edit'])->middleware(['auth']);

Route::get('/expro/{employee_id}',[ExproController::class,'index'])->middleware(['auth']);
Route::get('/expro/create/{employee_id}',[ExproController::class,'create'])->middleware(['auth']);
Route::post('/expro/store',[ExproController::class,'store'])->middleware(['auth']);
Route::get('/expro/edit/{parcour_id}',[ExproController::class,'edit'])->middleware(['auth']);

Route::get('/fonctionsups/{employee_id}',[FonctionsupController::class,'index'])->middleware(['auth']);
Route::get('/fonctionsups/create/{employee_id}',[FonctionsupController::class,'create'])->middleware(['auth']);
Route::post('/fonctionsups/store',[FonctionsupController::class,'store'])->middleware(['auth']);
Route::get('/fonctionsups/edit/{parcour_id}',[FonctionsupController::class,'edit'])->middleware(['auth']);

Route::get('/disposition/{employee_id}',[DispositionsController::class,'index'])->middleware(['auth']);
Route::get('/disposition/create/{employee_id}',[DispositionsController::class,'create'])->middleware(['auth']);
Route::post('/disposition/store',[DispositionsController::class,'store'])->middleware(['auth']);
Route::get('/disposition/edit/{parcour_id}',[DispositionsController::class,'edit'])->middleware(['auth']);

Route::get('/child/{employee_id}',[ChildsController::class,'index'])->middleware(['auth']);
Route::get('/child/create/{employee_id}',[ChildsController::class,'create'])->middleware(['auth']);
Route::post('/child/store',[ChildsController::class,'store'])->middleware(['auth']);
Route::get('/child/edit/{parcour_id}',[ChildsController::class,'edit'])->middleware(['auth']);

Route::get('/spouce/{employee_id}',[SpoucesController::class,'index'])->middleware(['auth']);
Route::get('/spouce/create/{employee_id}',[SpoucesController::class,'create'])->middleware(['auth']);
Route::post('/spouce/store',[SpoucesController::class,'store'])->middleware(['auth']);
Route::get('/spouce/edit/{parcour_id}',[SpoucesController::class,'edit'])->middleware(['auth']);

Route::get('/language/{employee_id}',[LanguageController::class,'index'])->middleware(['auth']);
Route::get('/language/create/{employee_id}',[LanguageController::class,'create'])->middleware(['auth']);
Route::post('/language/store',[LanguageController::class,'store'])->middleware(['auth']);
Route::get('/language/edit/{parcour_id}',[LanguageController::class,'edit'])->middleware(['auth']);

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return Inertia::render('Employee/index',);
})->name('dashboard');

Route::get('/dashboard',[EmployesController::class,'index'])->middleware(['auth']);