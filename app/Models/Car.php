<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_model_id',
        'car_model_parent_id',
        'model_year',
        'gear_type',
        'fuel',
        'engine_size',
        'engine_power',
        'distance',
        'price',
        'passenger_number',
        'previous_holders_number',
        'color',
    ];
}
