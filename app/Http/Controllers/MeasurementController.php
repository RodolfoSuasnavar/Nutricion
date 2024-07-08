<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;

class MeasurementController extends Controller
{
    public function index()
    {
        $progreso = Measurement::all();
        return view('progreso.index',  ['progreso' => $progreso]);
    }

    public function create()
    {
        return view(('progreso.agregar'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'peso' => 'required|numeric',
            'grasa_corporal' => 'nullable|numeric',
            'masa_muscular' => 'nullable|numeric',
            'nivel_energetico' => 'required|integer',
        ]);

        $progreso = new Measurement();
        $progreso->peso = $request->post('peso');
        $progreso->grasa_corporal = $request->post('grasa_corporal');
        $progreso->masa_muscular = $request->post('masa_muscular');
        $progreso->nivel_energetico = $request->post('nivel_energetico');

        // Guardar el registro en la base de datos
        $progreso->save();

 Log::info('Datos almacenados:', ['progreso' => $progreso]);
        // Redirigir a la ruta deseada con un mensaje de éxito
        return redirect()->route('progreso.index')->with('success', 'Medida almacenada exitosamente!');
    }

    public function edit($id)
    {
        $progreso = Measurement::find($id);
        return view("progreso.actualizar",  ['progreso' => $progreso]);

    }

    public function show($id)
    {
        $progreso = Measurement::find($id);
        return view("progreso.eliminar", ['progreso' => $progreso]);
    }

    public function update(Request $request, $id)
    {
        $progreso = Measurement::find($id);
        $progreso->peso = $request->post('peso');
        $progreso->grasa_corporal = $request->post('grasa_corporal');
        $progreso->masa_muscular = $request->post('masa_muscular');
        $progreso->nivel_energetico = $request->post('nivel_energetico');

        $progreso->save();
        return redirect()->route("progreso.index")->with("success", "Datos almacenados exitosamente!");

    }

    public function destroy($id)
    {
        $progreso = Measurement::find($id);
        // $categorias->steps->delete();
        // $personales->categoriaPersonal()->each(function($categoriaPersonal));
        $progreso->delete();
        return redirect()->route("progreso.index")->with("success", "Datos Eliminados exitosamente!");

    }
}
