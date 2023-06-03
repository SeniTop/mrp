<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PersetujuanResource;
use App\Http\Resources\PersetujuanCollection;

class UserPersetujuansController extends Controller
{
    public function index(Request $request, User $user): PersetujuanCollection
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $persetujuans = $user
            ->persetujuans()
            ->search($search)
            ->latest()
            ->paginate();

        return new PersetujuanCollection($persetujuans);
    }

    public function store(Request $request, User $user): PersetujuanResource
    {
        $this->authorize('create', Persetujuan::class);

        $validated = $request->validate([
            'setuju' => ['required', 'boolean'],
            'tidak' => ['required', 'boolean'],
        ]);

        $persetujuan = $user->persetujuans()->create($validated);

        return new PersetujuanResource($persetujuan);
    }
}
