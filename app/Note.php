<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $table = 'notes';
    protected $fillable = [
        'title', 'text',
    ];

    public function Team()
    {
        return $this->belongsTo('App\Team');
    }
}
