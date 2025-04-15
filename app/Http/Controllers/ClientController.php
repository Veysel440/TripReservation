<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required'
        ]);
        Client::create($request->all());
        return redirect()->route('clients.index');
    }
}
