<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerInfo extends Controller
{
    public function index() {
        return view('infos/contact/info');
    }
}