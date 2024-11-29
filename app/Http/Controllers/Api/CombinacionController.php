<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Combination;

class CombinacionController extends Controller
{
    public function getOne($id){            // PROBADO
        $combi = Combination::findOrFail($id);
        return response()->json($combi);
    }
}
