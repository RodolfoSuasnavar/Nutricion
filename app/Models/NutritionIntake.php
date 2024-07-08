<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionIntake extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha', 'carbohidratos', 'proteinas', 'grasas_saturadas', 'azucares'
    ];


}
