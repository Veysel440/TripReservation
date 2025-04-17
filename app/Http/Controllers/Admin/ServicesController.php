<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }


    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.service.index')->with('success', 'Servis başarıyla eklendi!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.service.index')->with('success', 'Servis başarıyla güncellendi!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'Servis başarıyla silindi!');
    }
}
