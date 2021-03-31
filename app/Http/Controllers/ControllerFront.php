<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFront extends Controller
{
    public function index() {
    $fronts = [
        (object)["nom"=>'louise', 'fonction'=>'élève'],
        (object)["nom"=>'ayhan', 'fonction'=>'coach'],
        (object)["nom"=>'maxence', 'fonction'=>'ucclois'],
        (object)["nom"=>'alex', 'fonction'=>'dru'],
    ];
    return view('team/web/dev/frontend', compact('fronts'));
    }
}
