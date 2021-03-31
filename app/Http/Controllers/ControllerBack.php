<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBack extends Controller
{
    public function index() {
        return view('team/web/dev/backend');
    }
}
