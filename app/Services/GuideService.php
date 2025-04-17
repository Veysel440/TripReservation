<?php

namespace App\Services;

use App\Models\Guide;
use Illuminate\Support\Facades\Storage;

class GuideService
{
    public function getAll()
    {
        return Guide::latest()->get();
    }

    public function find($id)
    {
        return Guide::findOrFail($id);
    }

    public function create(array $data, $photo = null)
    {
        if ($photo) {
            $data['photo'] = $photo->store('guides', 'public');
        }
        return Guide::create($data);
    }

    public function update($id, array $data, $photo = null)
    {
        $guide = $this->find($id);

        if ($photo) {
            // Eski fotoğrafı sil
            if ($guide->photo) {
                Storage::disk('public')->delete($guide->photo);
            }
            $data['photo'] = $photo->store('guides', 'public');
        }

        $guide->update($data);
        return $guide;
    }

    public function delete($id)
    {
        $guide = $this->find($id);

        if ($guide->photo) {
            Storage::disk('public')->delete($guide->photo);
        }

        return $guide->delete();
    }
}
