<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'precio', 
        'items'
    ];   

    public function content()
    {
        return $this->hasMany(Producto::class);
    }

}
