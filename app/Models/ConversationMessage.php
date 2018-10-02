<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationMessage extends Model
{
    protected $table = 'conversation_messages';

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function conversationMessage() {
        return $this->belongsTo('App\Models\Conversation', 'conversation_id');
    }

}

