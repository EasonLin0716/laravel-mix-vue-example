<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $people = [
            ['name' => 'John', 'age' => '12', 'sex' => 'M'],
            ['name' => 'Jane', 'age' => '15', 'sex' => 'F'],
            ['name' => 'Joseph', 'age' => '19', 'sex' => 'M'],
        ];

        return view('helloworld', ['people' => $people, 'bookPage' => request('bookpage')]);
    }

    public function show($id) {
        return view('helloDetail', ['id' => $id]);
    }
}
