<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{

    use softDeletes;

    protected $fillable = [
        'vehicle', 'model', 'year', 'description', 'sold',
    ];
    protected $dates = ['deleted_at'];
}
