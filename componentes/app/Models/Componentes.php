<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentes extends Model
{
    use HasFactory;
    

    public static function getTableName()
    {
        return "componentes";
    }
}
