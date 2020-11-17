<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany('App\User','position_id');
    }
}
