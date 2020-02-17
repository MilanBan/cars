<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
public function index()
    {
        $name = 'Petar';
        $age = 55;
        return view('about', compact('name', 'age'));
    }
}