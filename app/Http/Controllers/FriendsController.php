<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class FriendsController extends Controller
{
    public function index() {
        
        $friends = Friends::orderBy('gender')->get();

        return view('friends.index', ['people' => $friends, 'bookPage' => request('bookpage')]);
    }

    public function show($id) {
        return view('friends.show', ['id' => $id]);
    }
}
