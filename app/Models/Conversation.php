<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table = 'conversations';

    public function conversation() {
        $this->hasMany('App\Models\ConversationMessage');
    }

    public function friends() {
        $this->belongTo('App\Models\Friend');
    }
}
