<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'color'
    ];

    public function limits(): HasMany
    {
        return $this->hasMany(Limit::class, 'status');
    }
}