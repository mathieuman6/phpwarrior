<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'pseudo', 'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function friends1() {
        return $this->hasMany('App\Models\Friend','user1_id');
    }

    public function friends2() {
        return $this->hasMany('App\Models\Friend','user2_id');
    }

    public function friends() {
        return $this->friends1->merge($this->friends2);
    }

    public function getConversations(){
        foreach ($this->friends() as $friend){
            return $friend = $friend->conversations;
        }

    }
}
