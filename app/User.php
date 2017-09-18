<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function getUser(){
        $users = User::all();
        return $users;
    }

    public function activeUser($user_id){
        $user = User::find($user_id);
        if($user->role == 1) return false;
        $user->active = !$user->active;
        $flag = $user->save();
        return $flag;
    }
}
