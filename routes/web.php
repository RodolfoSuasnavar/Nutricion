<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NutritionIntakeController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\LoginController;
use App\Models\Measurement;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/ejercicio', function () {
    return view('ejercicio');
})->name('ejercicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/verificador', function () {
    return view('verificador');
})->name('verificador');

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('registro');
Route::view('/privada', 'secret')->middleware('auth')->name('privada');

Route::post('/analyze-image', 'VerificadorController@analyzeImage')->name('analyze.image');


Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');

Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::get('/alimento', [NutritionIntakeController::class, 'index'])->middleware('auth')->name('alimento.index');
Route::get('/alimento/create', [NutritionIntakeController::class, 'create'])->middleware('auth')->name('alimento.agregar');
Route::post('/alimento', [NutritionIntakeController::class, 'store'])->name('alimento.store');

Route::get('/alimento/edit/{id}', [NutritionIntakeController::class, 'edit'])->name('alimento.edit');
Route::put('/alimento/update/{id}', [NutritionIntakeController::class, 'update'])->middleware('auth')->name('alimento.update');
Route::get('/alimento/show/{id}', [NutritionIntakeController::class, 'show'])->middleware('auth')->name('alimento.show');
Route::delete('/alimento/destroy/{id}', [NutritionIntakeController::class, 'destroy'])->middleware('auth')->name('alimento.destroy');



Route::get('/progreso', [MeasurementController::class, 'index'])->middleware('auth')->name('progreso.index');
Route::get('/progreso/create', [MeasurementController::class, 'create'])->middleware('auth')->name('progreso.agregar');
Route::post('/progreso', [MeasurementController::class, 'store'])->name('progreso.store');

Route::get('/progreso/edit/{id}', [MeasurementController::class, 'edit'])->name('progreso.edit');
Route::put('/progreso/update/{id}', [MeasurementController::class, 'update'])->middleware('auth')->name('progreso.update');
Route::get('/progreso/show/{id}', [MeasurementController::class, 'show'])->middleware('auth')->name('progreso.show');
Route::delete('/progreso/destroy/{id}', [MeasurementController::class, 'destroy'])->middleware('auth')->name('progreso.destroy');






















// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

