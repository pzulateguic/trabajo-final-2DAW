<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstalacionesComponentes extends Model
{
    use HasFactory;
    public static function getTableName()
    {
        return "instalaciones_componentes";
    }
}

