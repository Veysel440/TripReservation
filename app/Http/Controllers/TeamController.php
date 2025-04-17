<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $guides = Guide::all();
        return view('team.index', compact('guides'));
    }
}
