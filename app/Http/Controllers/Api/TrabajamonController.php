<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trabajamon;

class TrabajamonController extends Controller
{
    public function getOne($id){            // PROBADO
        $trabajamon = Trabajamon::findOrFail($id);
        return response()->json($trabajamon);
    }

    public function getAll() {              // PROBADO
        $trabajamonS = Trabajamon::all();
        return response()->json($trabajamonS); 
    }

    public function postOne(Request $request) {
        $validated = $request->validate([
            'nombre' => 'required|string',
            'profesion' => 'required|string',
            'edad' => 'required',
            'vida' => 'required',
            'ataque' => 'required',
            'defensa' => 'required',
            'velocidad' => 'required'
        ]);
        $post = Trabajamon::create($validated);
        return response() -> json($post,201);   //201 es el código HTTP para "creado"
    }

    public function update(Request $request, $id) {
        $trabajamon = Trabajamon::findOrFail($id);
        $validated = $request->validate([
            'nombre' => 'required|string',
            'profesion' => 'required|string',
            'edad' => 'required',
            'vida' => 'required',
            'ataque' => 'required',
            'defensa' => 'required',
            'velocidad' => 'required'
        ]);
        $trabajamon->update($validated);
        return response() -> json($trabajamon);
    }

    public function destroy($id) {
        $trabajamon = Trabajamon::findOrFail($id);
        $trabajamon->delete();
        return response()->json(null,204);
    }
}
