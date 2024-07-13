<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'isbn', 'cantidad_disponible'];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
