<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddFriendRequest;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function add(AddFriendRequest $request)
    {
        if (Auth::user()->pseudo == $request->pseudo) {
            return redirect()->route('index');
        }
        $user = User::where('pseudo', $request->pseudo)->first();
        if (Friend::where('user1_id', Auth::id())->where('user2_id', $user->id)
            ->orWhere('user2_id', Auth::id())->where('user1_id', $user->id)->first()) {
            return redirect()->route('index');
        }
        $friend = new Friend([
            'user1_id' => Auth::id(),
            'user2_id' => $user->id,
            'accepted' => false,
        ]);
        $friend->save();

        return redirect()->route('index');
    }

    public function accept($id)
    {
        $friend = Friend::find($id);
        if($friend) {
            $friend->accepted = true;
            $friend->save();
        }
        return redirect()->route('index');
    }

    public function refuse($id)
    {
        $friend = Friend::find($id);
        if($friend) {
            $friend->delete();
        }
        return redirect()->route('index');
    }
}
