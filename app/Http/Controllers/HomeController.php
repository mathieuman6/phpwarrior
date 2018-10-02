<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $friends = Friend::friends();
        foreach($friends as $friend) {
            $friend = $friend->getFriend(Auth::user());
        }
        $user = Auth::user();
        $conversations = Conversation::conversations();
        dump($friends);
        /*return view('home', [
            'friends' => $friends,
            'user' => $user,
            'conversations' => $conversations
        ]);*/
    }
}

