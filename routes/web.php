<?php

use App\Http\Controllers\EmployeeController;
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

Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'showFormCreate'])->name('employees.showFormCreate');
    Route::post('/create', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/delete/{id}', [EmployeeController::class, "destroy"])->name("employees.delete");
    Route::get('/edit/{id}', [EmployeeController::class, "showFormEdit"])->name("employees.showFormEdit");
    Route::post('/edit/{id}', [EmployeeController::class, "update"])->name("employees.edit");
    Route::get('/search/', [EmployeeController::class, "search"])->name("employees.search");

});
