<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\NutritionIntake;
use Illuminate\Support\Facades\Log;


class NutritionIntakeController extends Controller
{
    public function index()
    {
        $alimento = NutritionIntake::all();
        return view('alimento.index',  ['alimento' => $alimento]);
    }

    public function create()
    {
        return view(('alimento.agregar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'carbohidratos' => 'required|numeric',
            'proteinas' => 'required|numeric',
            'grasas_saturadas' => 'required|numeric',
            'azucares' => 'required|numeric',
        ]);



        // Crear un nuevo registro de NutritionIntake y asignar valores
        $alimento = new NutritionIntake();
        $alimento->fecha = $request->post('fecha');
        $alimento->carbohidratos = $request->post('carbohidratos');
        $alimento->proteinas = $request->post('proteinas');
        $alimento->grasas_saturadas = $request->post('grasas_saturadas');
        $alimento->azucares = $request->post('azucares');



        // Guardar el registro en la base de datos
        $alimento->save();
 // Registro de depuración
 Log::info('Datos almacenados:', ['alimento' => $alimento]);
        // Redirigir a la ruta deseada con un mensaje de éxito
        return redirect()->route("alimento.index")->with("success", "Datos almacenados exitosamente!");

    }

    public function edit($id)
    {
        $alimento = NutritionIntake::find($id);
        return view("alimento.actualizar",  ['alimento' => $alimento]);

    }

    public function show($id)
    {
        $alimento = NutritionIntake::find($id);
        return view("alimento.eliminar", ['alimento' => $alimento]);
    }

    public function update(Request $request, $id)
    {
        $alimento = NutritionIntake::find($id);
        $alimento->fecha = $request->post('fecha');
        $alimento->carbohidratos = $request->post('carbohidratos');
        $alimento->proteinas = $request->post('proteinas');
        $alimento->grasas_saturadas = $request->post('grasas_saturadas');
        $alimento->azucares = $request->post('azucares');

        $alimento->save();
        return redirect()->route("alimento.index")->with("success", "Datos almacenados exitosamente!");

    }

    public function destroy($id)
    {
        $alimento = NutritionIntake::find($id);
        // $categorias->steps->delete();
        // $personales->categoriaPersonal()->each(function($categoriaPersonal));
        $alimento->delete();
        return redirect()->route("alimento.index")->with("success", "Datos Eliminados exitosamente!");

    }
}
