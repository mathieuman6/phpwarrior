<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table = 'conversations';

    public function conversationMessages() {
        $this->hasMany('App\Models\ConversationMessage');
    }

    public function friend() {
        $this->belongTo('App\Models\Friend');
    }

    public function getLastMessage()
    {
        return $this->conversationMessages()->last();
    }
}