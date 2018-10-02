<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationMessage extends Model
{
    protected $table = 'conversation_messages';

    public function user() {
        $this->belongsTo('App\Models\User', 'user_id');
    }

    public function conversationMessage() {
        $this->belongsTo('App\Models\Conversation', 'conversation_id');
    }

}

