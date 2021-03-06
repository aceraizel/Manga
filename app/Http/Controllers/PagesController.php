<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
    public function index() {

        return Redirect::route('widget.index');
    }

    public function terms() {
        return view('pages.terms-of-service');
    }

    public function privacy() {
        return view('pages.privacy');
    }
}
