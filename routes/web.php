<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\FicheroController;
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




Route::get('/test',function (){
    $user = \App\Models\User::find(3);
    dd($user->pedidos[0]->producto);
});

Route::get('/',[MainController::class,"index"] )->name('home');

Route::get('/productos',[ProductoController::class,"index"] )->name("listar.productos");
Route::get('/producto/{id}',[ProductoController::class,"show"] )->name("mostrar.producto");

Route::get('/listarFicheros',[FicheroController::class,"index"] )->name("listar.ficheros");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/confirmar-compra/{id}',[ProductoController::class,'confirmar'])->name('confirmar.compra');
    Route::post('/comprar',[ProductoController::class,'comprar'])->name('producto.comprar');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/subirFichero',[FicheroController::class,"showFormFichero"] )->name("mostrar.subirFichero");
    Route::post('/storeFichero',[FicheroController::class,"store"] )->name("crear.fichero");
    Route::get('/eliminarFichero/{fichero_id}',[FicheroController::class,"destroy"] )->name("eliminar.fichero");
    Route::get('/profile', [PedidoController::class, 'index'])->name('listar.pedidos');
    Route::middleware('check.age')->group(function () {
        Route::get('/contenido-mayor-edad',function (){
            echo "Estas dentro del contenido para mayores de 18";
        });
    });
});
require __DIR__.'/auth.php';