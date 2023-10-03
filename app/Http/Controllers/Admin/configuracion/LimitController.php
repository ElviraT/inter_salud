<?php

namespace App\Http\Controllers\Admin\configuracion;

use App\Http\Controllers\Controller;
use App\Models\Limit;
use Illuminate\Http\Request;

class LimitController extends Controller
{
    public function index(Limit $limits)
    {

        return view('admin.configuracion.limites.index', ['limits' => $limits->all()]);
    }
}
