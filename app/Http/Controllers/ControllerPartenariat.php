<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPartenariat extends Controller
{
    public function index() {
        return view('infos/contact/partenariat');
    }
}
