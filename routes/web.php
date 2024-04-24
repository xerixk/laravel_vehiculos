<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VehiculoController;
use App\Models\User;
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



Route::get('/test', function(){
    /*
      //Obtener datos

      $user = User::find(1); //ORM Eloquent
      $users = User::where('id','>',3)
          ->where('id','<',10)
          ->where('name','like','%h%')
          ->get();
      dd($users);
      $users = User::select('name','lastname','email')->latest()->get();
      foreach($users as $user){
          echo $user->name." ". $user->lastname." ".$user->email. "<br>";
      }


         //Modificar

         $user = User::find(1);

         $user->name = "Mario";
         $user->save();


         User::where('id',1)->update([
             'lastname'=>"apellido",
             'email'=>"mario@mario.es",
         ]);

         //Eliminar
         $user = User::find(11);
         $user->delete();

     // Crear/insertar
         User::create([
             'name'=>"Mario nuevo",
             'lastname'=>"Mario apellido",
             'email'=>"mario@mario.es",
             'password'=>\Illuminate\Support\Facades\Hash::make("123456"),
         ]);

         $user = new User();
         $user->name = "nuevo user";
         $user->lastname = "nuevo user lastname";
         $user->email = "nuevo@user.es";
         $user->password = \Illuminate\Support\Facades\Hash::make("123456");
         $user->save();
     */

});


Route::get('/', [MainController::class,'index'])->name('home');

Route::get('/listar',[VehiculoController::class,'index'])->name('listar.items');
Route::get('/ver/{matricula}', [VehiculoController::class, 'show'])->name('mostrar.item');
Route::get('/editar/{id}',[VehiculoController::class,'edit'])->name('mostrar.editar');
Route::put('/actualizar/{id}',[VehiculoController::class,'update'])->name('actualizar.item');
Route::delete('/eliminar/{id}',[VehiculoController::class,'destroy'])->name('eliminar.item');
Route::get('/crear',[VehiculoController::class,'create'])->name('mostrar.crear');
Route::POST('/store',[VehiculoController::class,'store'])->name('crear.item');


/*Route::get('/ruta1/{nombre}/{edad}', function ($nombre,$edad) {
    echo "Ruta 1, hola ".$nombre. " tu edad es : ".$edad;
});*/
/*
Route::get('/ruta1/{nombre}/{edad}', [TestController::class,'index']);
Route::get('/ruta2/nombre', [TestController::class,'indexruta2']);
*/
//Route::get('/ruta1/{nombre}/{edad}', 'TestController@index');