<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion'];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
