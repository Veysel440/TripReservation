<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuideRequest;
use App\Services\GuideService;
use Illuminate\Http\Request;

class GuidesController extends Controller
{
    protected $guideService;

    public function __construct(GuideService $guideService)
    {
        $this->guideService = $guideService;
    }

    public function index()
    {
        $guides = $this->guideService->getAll();
        return view('admin.guides.index', compact('guides'));
    }

    public function create()
    {
        return view('admin.guides.create');
    }

    public function store(GuideRequest $request)
    {
        $this->guideService->create($request->validated(), $request->file('photo'));
        return redirect()->route('admin.guides.index')->with('success', 'Rehber başarıyla eklendi.');
    }

    public function edit($id)
    {
        $guide = $this->guideService->find($id);
        return view('admin.guides.edit', compact('guide'));
    }

    public function update(GuideRequest $request, $id)
    {
        $this->guideService->update($id, $request->validated(), $request->file('photo'));
        return redirect()->route('admin.guides.index')->with('success', 'Rehber başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $this->guideService->delete($id);
        return redirect()->route('admin.guides.index')->with('success', 'Rehber silindi.');
    }
}
