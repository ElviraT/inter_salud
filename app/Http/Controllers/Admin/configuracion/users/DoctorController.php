<?php

namespace App\Http\Controllers\Admin\configuracion\users;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\MaritalStatus;
use App\Models\Municipality;
use App\Models\Parish;
use App\Models\Prefix;
use Spatie\Permission\Models\Role;
use App\Models\Sex;
use App\Models\State;
use App\Models\Status;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:usersm.index|usersm.create|usersm.edit|usersm.destroy', ['only' => ['index', 'store']]);
        $this->middleware('permission:usersm.create', ['only' => ['create', 'store']]);
        $this->middleware('permission:usersm.edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:usersm.destroy', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $usersm = Doctor::orderBy('id', 'ASC')->get();
        return view('admin.configuracion.usuarios.userm.index', compact('usersm'));
    }

    public function create()
    {
        $sexo = Sex::pluck("name", "id");
        $prefijo = Prefix::pluck("name", "id");
        $estadoC = MaritalStatus::pluck("name", "id");
        $status = Status::pluck("name", "id");
        $nacionalidad = Country::pluck("name", "id");
        $ciudad = City::pluck("name", "id");
        $estado = State::pluck("name", "id");
        $municipio = Municipality::pluck("name", "id");
        $parroquia = Parish::pluck("name", "id");
        $roles = Role::pluck("name", "id");

        return view('admin.configuracion.usuarios.userm.create')->with(compact('sexo', 'prefijo', 'estadoC', 'status', 'nacionalidad', 'ciudad', 'estado', 'municipio', 'parroquia', 'roles'));
    }
}
