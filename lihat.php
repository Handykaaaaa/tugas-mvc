<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lihat extends Controller
{
    public function index()
    {
        $users = user ::all();
        return view ('users.index', compact('users'));
    }
}
