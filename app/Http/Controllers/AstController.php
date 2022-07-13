<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AstController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return view('ast.ast');
        } else {
            if (Auth::user()->paid != 1) {
                return view('ast.ast');
            } else {
                return view('ast.ast');
            }
        }
    }

    public function apply()
    {
        if (!Auth::guest()) {
            if (Auth::user()->paid == 1) {
                return view('examroom');
            } else {
                abort(408, "It would appear you have not paid to access this feature.");
            }
        } else {
            // return view('ast.register');
            return 'you never pay Bros';
        }
    }

    public function login()
    {
        //
    }

    public function pay()
    {
        //
    }

    public function syllabus()
    {
        //
    }
}
