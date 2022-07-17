<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    public function courses()
    {
        return view('hall.courses', ['courses' => Course::paginate(20)]);
    }

    public function course($slug)
    {
        return view('hall.course', ['course' => Course::where('id', '=', $slug)->first()]);
    }
}
