<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        return view('hall.hall');
    }

    public function create()
    {
        return view('hall.create');
    }

    public function workspace($space)
    {
        return view('hall.workspace');
    }

    public function workspaces()
    {
        return view('hall.workspaces');
    }
}
