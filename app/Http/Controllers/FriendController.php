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

    public function store() {

        $friend = new Friend();

        $friend->name = request('name');
        $friend->age = request('age');
        $friend->gender = request('gender');

        $friend->save();
        
        return response()->json(['status'=>'OK', 'message'=>'success'], 201);
    }
}
