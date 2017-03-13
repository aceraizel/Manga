<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $Songs = ['Shape of you', 'My love', 'Uptown girl'];

        return view('test.index', conpact('Songs'));
    }
}
