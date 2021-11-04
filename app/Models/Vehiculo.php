<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = "vehiculos";
    protected $primaryKey = "id";
    protected $fillable = ["id", 'placa', 'tipo_id', 'marca_id', 'cliente_id'];

}
