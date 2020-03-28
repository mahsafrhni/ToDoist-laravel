<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'name', 'bio', 'start', 'finish', 'user_id',
    ];
}
