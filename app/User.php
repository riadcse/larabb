<?php

namespace Larabb;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * The users' topics that they have started
     * 
     * @return array
     */
    public function topics()
    {
        return $this->hasMany('Larabb\Topic');
    }

    /**
     * The users' replies to other topics
     * 
     * @return array
     */
    public function replies()
    {
        return $this->hasMany('Larabb\Reply');
    }
}
