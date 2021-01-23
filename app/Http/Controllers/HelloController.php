<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FriendList;

class HelloController extends Controller
{
    public function index() {
        
        $friendList = FriendList::orderBy('gender')->get();

        return view('helloworld', ['people' => $friendList, 'bookPage' => request('bookpage')]);
    }

    public function show($id) {
        return view('helloDetail', ['id' => $id]);
    }
}
