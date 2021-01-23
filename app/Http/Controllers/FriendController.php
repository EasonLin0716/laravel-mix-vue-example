<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index() {
        
        $friends = Friend::orderBy('gender')->get();

        return view('friends.index', ['people' => $friends, 'bookPage' => request('bookpage')]);
    }

    public function show($id) {

        $friend = Friend::find($id);

        return view('friends.show', ['friend' => $friend]);
    }

    public function create() {
        return view('friends.create');
    }
}
