<?php

use App\Http\Controllers\FicheroController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [MainController::class,'index'])->name('home');

Route::get('/listar',[VehiculoController::class,'index'])->name('listar.items');
Route::get('/ver/{matricula}', [VehiculoController::class, 'show'])->name('mostrar.item');
Route::get('/editar/{id}',[VehiculoController::class,'edit'])->name('mostrar.editar');
Route::put('/actualizar/{id}',[VehiculoController::class,'update'])->name('actualizar.item');
Route::delete('/eliminar/{id}',[VehiculoController::class,'destroy'])->name('eliminar.item');
Route::get('/crear',[VehiculoController::class,'create'])->name('mostrar.crear');
Route::POST('/store',[VehiculoController::class,'store'])->name('crear.item');

Route::get('/form.fichero',[FicheroController::class,"showFormFichero"] )->name("form.fichero");
Route::post('/guardar.fichero', [FicheroController::class, 'guardar'])->name('guardar.fichero');
Route::get('/listar.ficheros', [FicheroController::class, 'index'])->name('listar.ficheros');
Route::get('/eliminarFichero/{id}',[FicheroController::class,"destroy"] )->name("eliminar.fichero");

require __DIR__.'/auth.php';