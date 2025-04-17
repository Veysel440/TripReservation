<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Guide;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $guides = Guide::all();
        $services = Service::all();
        return view('home.index', compact('about','guides','services'));
    }
}
