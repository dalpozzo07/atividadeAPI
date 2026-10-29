<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class carroController extends Controller
{
    // CRUD de carros

    protected $carroRepository;

    public function __construct(carroRepository $carroRepository)
    {
        $this->carroRepository = $carroRepository;
    }

    public function index()
    {
        $carros = $this->carroRepository->search();
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
            $carro = $this->carroRepository->update(
            $id,
            $request->all()
        );

        return response()->json($carro);
    }

    public function destroy($id)
    {
        $this->carroRepository->delete($id);

        return response()->json(null, 204);
    }
}
