<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class ComboController extends Controller
{
    public function state($country)
    {
        $states = State::select(['id', 'name'])->where('idCountry', $country)->get();
        return response()->json($states);
    }
}
