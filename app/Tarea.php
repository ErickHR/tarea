<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    
    protected $fillable = [
        'name',
        'status',
        'status_delete'
    ];

}
