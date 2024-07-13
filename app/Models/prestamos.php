<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    use HasFactory;

    protected $fillable = ['libro_id', 'cliente_id', 'fecha_prestamo', 'fecha_devolucion'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
