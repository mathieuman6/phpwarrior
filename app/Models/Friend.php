<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';

    public function user1() {
        return $this->belongsTo('App\Models\User', 'user1_id');
    }

    public function user2() {
        return $this->belongsTo('App\Models\User', 'user2_id');
    }

    public function conversations() {
        return $this->hasMany('App\Models\Conversation');
    }

    public function getFriend($user){
        if($this->user1() == $user){
            return $this->user2;
        }
        else{
            return $this->user1;
        }
    }
}
