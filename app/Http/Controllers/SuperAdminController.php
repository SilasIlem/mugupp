<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function index()
    {
        // if (Auth::user()->('superadmin')) {
        //     return view('superadmin');
        // }
        return dd(Auth::user());
    }
}
