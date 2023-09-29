<?php

namespace App\Http\Controllers\Admin\configuracion\direccion;

use App\Http\Controllers\Controller;
use App\Models\Municipality;
use App\Models\Parish;
use Illuminate\Http\Request;

class ParishController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:parishes.index|parishes.create|parishes.edit|parishes.destroy', ['only' => ['index', 'store']]);
        $this->middleware('permission:parishes.create', ['only' => ['create', 'store']]);
        $this->middleware('permission:parishes.edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:parishes.destroy', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $municipalities = Municipality::get();
        $parishes = Parish::orderBy('id', 'ASC')->get();
        return view('admin.configuracion.direccion.parroquias.index', compact('parishes', 'municipalities'));
    }
}
