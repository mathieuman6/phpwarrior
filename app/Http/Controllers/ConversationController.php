<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index($conversation_id) {
        $conversation = Conversation::find($conversation_id);
        $messages = $conversation->conversationMessages;
        return view('conversation', [
            'messages' => $messages,
        ]);
    }
}
