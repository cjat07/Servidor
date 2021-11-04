<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table = "tipo_vehiculos";
    protected $primaryKey = "id";
    protected $fillable = ["id",'tipo'];
}
