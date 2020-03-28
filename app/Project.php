<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
//$projects = Project::all();
//foreach ($projects->roles as $role) {
//    //
//}
    protected $table = 'project';
    protected $fillable = [
        'name', 'about', 'status', 'color',
    ];

    public function Team()
    {
        return $this->hasMany('App\Team');
    }
}
