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
        $friendsC = $user->friends;
        $friends = [];
        foreach($friendsC as $friend) {
            array_push($friends, $friend->getFriend($user));
        }
        $conversations = $user->getConversations();
        return view('home', [
            'friends' => $friends,
            'user' => $user,
            'conversations' => $conversations,
        ]);
    }
}

