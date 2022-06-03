<?php

use App\Http\Controllers\BudgetController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/budgets', [BudgetController::class,'index']);

Route::get('/budgets/{id}', [BudgetController::class,'show']);
Route::put('/budgets/{id}', [BudgetController::class,'update']);



Route::post('/budgets', [BudgetController::class,'store']);


Route::delete('/budgets/{id}', [BudgetController::class,'destroy']);

