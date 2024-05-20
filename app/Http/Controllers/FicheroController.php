<?php

namespace App\Http\Controllers;

use App\Models\Fichero;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class FicheroController extends Controller
{
    public function guardar(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|max:10240|mimes:png,jpg,pdf,gif,docx', 
        ]);

        $rutaArchivo = $request->file('archivo');

        $nombreArchivo =$rutaArchivo->getClientOriginalName();
        $extension=$rutaArchivo->getClientOriginalExtension();
        $nombreAleatorio= uniqid().'.'.$extension;
        $rutaArchivo->storeAs('public/files', $nombreAleatorio);

        $fichero = new Fichero();
        $fichero->nombre = $nombreAleatorio;
        $fichero->tipo_fichero =$extension;
        $fichero->user_id = auth()->user()->id; 
        $fichero->save();

        return redirect()->back()->with('success', 'Archivo subido correctamente.');
    }
    public function index()
    {
        $ficheros = Fichero::all();
        return view('itemViews.showFichero', compact('ficheros'));
    }
    public function showFormFichero(): View
    {
        return view("itemViews.createFicheros");
    }
    public function destroy(string $id){
        $fichero=Fichero::find($id);

        if($fichero!=null && Storage::disk('public')->exists('files/'.$fichero->nombre)){
            Storage::disk('public')->delete('files/'.$fichero->nombre);
            $fichero->delete();
            return redirect()->route('listar.ficheros')->with('success','Fichero eliminado correctamente.');
        }else{
            return redirect()->route('listar.ficheros')->with('error','Fichero no encontrado.');
        }

    }
}

