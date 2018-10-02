<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';

    public function user1() {
        $this->belongsTo('App\Models\Users', 'user1_id');
    }

    public function user2() {
        $this->belongsTo('App\Models\Users', 'user2_id');
    }

    public function conversations() {
        $this->hasMany('App\Models\ConversationMessage');
    }
}
