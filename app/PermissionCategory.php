<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionCategory extends Model
{
    //
    protected $fillable = ['name'];
    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role','permission_role','permission_id','role_id');
    // }
}
