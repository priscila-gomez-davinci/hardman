<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = [
        "productos",
        "precio", 
        "is_visible"
    ];

    public function producto()
    {
        return $this->hasMany(Producto::class, 'id', 'productos');
    }
}
