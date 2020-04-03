<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
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
        return $this->belongsToMany('App\User', 'users_team', 'team_id', 'users_id');
    }

    public function Task()
    {
        return $this->hasMany('App\Task', 'tasks_team_id', 'team_id');
    }

    public function Note()
    {
        return $this->hasMany('App\Note');
    }
}
