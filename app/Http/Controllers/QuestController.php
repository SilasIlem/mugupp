<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    public function index()
    {
        return view('questions', ['quests' => Quest::paginate(1)]);
    }
}
