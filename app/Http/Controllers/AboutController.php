<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
}

