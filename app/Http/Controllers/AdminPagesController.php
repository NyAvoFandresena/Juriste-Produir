<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function internList() {
        return view('admin.interns');
    }

    public function internInfo() {
        return view('admin.interninfo');
    }
}
