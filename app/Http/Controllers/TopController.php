<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $message = 'Hello World';

        return view('index', compact('message'));
    }
}
