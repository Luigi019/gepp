<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class HomeController extends Controller
{
    public function index()
    {
        $state = State::all();
        return view('welcome', compact('state'));
    }
}
