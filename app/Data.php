<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'name'
    ];

    protected $hidden = [
        
    ];
}
