<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haysController extends Controller
{
    public function show()
    {
        return view('hays.home');
    }

    public function independenceGroup()
    {
        return view('hays.ig');
    }

    public function faraway()
    {
        return view('hays.faraway');
    }
}
