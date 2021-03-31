<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerSav extends Controller
{
    public function index () {
        return view('infos/contact/sav');
    }
}
