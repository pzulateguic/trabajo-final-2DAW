<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualizacionesComponentes extends Model
{
    use HasFactory;
    public static function getTableName()
    {
        return "actualizaciones_componentes";
    }
}
