<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class carroController extends Controller
{
    // CRUD de carros

    public function index()
    {
        $carros = Carro::all();
        return response()->json($carros);
    }

    public function show($id)
    {
        $carro = Carro::find($id);
        return response()->json($carro);
    }

    public function store(Request $request)
    {
        $carro = Carro::create($request->all());
        return response()->json($carro, 201);
    }

    public function update(Request $request, $id)
    {
        $carro = Carro::find($id);
        $carro->update($request->all());
        return response()->json($carro);
    }

    public function destroy($id)
    {
        $carro = Carro::find($id);
        $carro->delete();
        return response()->json(null, 204);
    }
}
