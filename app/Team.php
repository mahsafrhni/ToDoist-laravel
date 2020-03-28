<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table = 'team';
    protected $fillable = [
        'name', 'color', 'project_id',
    ];

    public function Project()
    {
        return $this->belongsTo('App\Project');
    }

    public function User()
    {
        return $this->hasMany('App\User');
    }

    public function Task()
    {
        return $this->hasMany('App\Task');
    }

    public function Note()
    {
        return $this->hasMany('App\Note');
    }
}
