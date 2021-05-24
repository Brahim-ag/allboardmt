<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\EmployesController;

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
    // Route::get('/getone/{id}',[EmployeesController::class,'show']);
    Route::put('/edit/{id}',[EmployesController::class,'update']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});