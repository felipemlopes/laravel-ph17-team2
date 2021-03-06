<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model
{
    protected $table = 'user_roles';

    public $timestamp = true;

    protected $fillable = [
        'id',
        'user_id',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
