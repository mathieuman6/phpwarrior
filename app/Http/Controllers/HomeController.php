<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $conversations = Conversation::where('friend_id');
        return view('home');
    }
}

