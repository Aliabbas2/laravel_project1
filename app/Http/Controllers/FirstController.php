<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function show(): string
    {
        return "controller is working fine";
    }

    public function showme()
    {
        return "controller is working well";
    }

    public function show_view()
    {
        return view('welcome');
    }

}
