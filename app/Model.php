<?php

namespace App;

use Illuminate\Database\Eloquent\Model as LaravelModel;

class Model extends LaravelModel
{
    protected $fillable = array(
        'name'
    );
}
