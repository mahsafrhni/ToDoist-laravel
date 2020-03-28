<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'name', 'bio', 'start', 'finish', 'user_id',
    ];

    public function Team()
    {
        return $this->belongsTo('App\Team');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
