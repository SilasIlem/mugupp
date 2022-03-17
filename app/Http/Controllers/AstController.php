<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AstController extends Controller
{
    public function index()
    {
        if (Auth::user()->paid != 1) {
            return view('mast');
        } else {
            return view('examroom');
        }
    }

    public function apply()
    {
        if (Auth::user()->paid == 1) {
            return view('examroom');
        } else {
            abort(401, "It would appear you have not paid to access this feature.");
        }
    }
}
