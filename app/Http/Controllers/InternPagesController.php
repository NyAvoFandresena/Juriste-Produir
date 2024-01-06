<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternPagesController extends Controller
{
    public function index() {
        return view('intern.dashboard');
    }
}
