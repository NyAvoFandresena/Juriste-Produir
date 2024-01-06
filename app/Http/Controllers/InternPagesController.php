<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternPagesController extends Controller
{
    public function index() {
        return view('intern.dashboard');
    }

    public function create() {
        return view('intern.createTask');
    }

    public function modify() {
        return view('intern.modify');
    }
}
