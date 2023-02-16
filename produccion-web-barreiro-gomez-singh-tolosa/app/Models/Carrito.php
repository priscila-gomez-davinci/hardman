<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = [

        "marca", 
        "producto",
        "precio", 
        "imagen", 
        "is_visible"
    ];

}
