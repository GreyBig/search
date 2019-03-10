<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    protected $fillable = [
        'implied_information', 'poetry_cloud', 'lucky_star','number_value_assessment','personality_coefficient','personality_type','performance'
    ];
}
