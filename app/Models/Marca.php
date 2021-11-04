<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";
    protected $primaryKey = "id";
    protected $fillable = ["id",'marca'];

    public function vehiculos()
    {
        // return $this->hasOne(Vehiculo::class,'marca_id');
        return $this->hasMany(Vehiculo::class);
    }
}
