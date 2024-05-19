<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloController extends Controller
{
    /**
     * Mostarr el saludo
     */
    public function show(string $name): view
    {
        return view('hello', ['name' => $name]);
    }

}
