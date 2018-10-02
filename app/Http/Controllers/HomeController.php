<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()

    {
        $user = Auth::user();
        $friends = $user->friends();
        foreach($friends as $friend) {
            $friend = $friend->getFriend($user);
        }
        $conversations = $user->getConversations();
        dump($conversations);
        return view('home', [
            'friends' => $friends,
            'user' => $user,
            'conversations' => $conversations
        ]);
    }
}

