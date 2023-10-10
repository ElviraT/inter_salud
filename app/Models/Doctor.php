<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'idSex',
        'idStatus',
        'idMaritalState',
        'idCountry',
        'idState',
        'idCity',
        'idMunicipality',
        'idParish',
        'brithday',
        'register',
        'ncolegio',
    ];
}
