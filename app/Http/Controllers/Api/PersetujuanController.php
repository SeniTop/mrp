<?php

namespace App\Http\Controllers\Api;

use App\Models\Persetujuan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\PersetujuanResource;
use App\Http\Resources\PersetujuanCollection;
use App\Http\Requests\PersetujuanStoreRequest;
use App\Http\Requests\PersetujuanUpdateRequest;

class PersetujuanController extends Controller
{
    public function index(Request $request): PersetujuanCollection
    {
        $this->authorize('view-any', Persetujuan::class);

        $search = $request->get('search', '');

        $persetujuans = Persetujuan::search($search)
            ->latest()
            ->paginate();

        return new PersetujuanCollection($persetujuans);
    }

    public function store(PersetujuanStoreRequest $request): PersetujuanResource
    {
        $this->authorize('create', Persetujuan::class);

        $validated = $request->validated();

        $persetujuan = Persetujuan::create($validated);

        return new PersetujuanResource($persetujuan);
    }

    public function show(
        Request $request,
        Persetujuan $persetujuan
    ): PersetujuanResource {
        $this->authorize('view', $persetujuan);

        return new PersetujuanResource($persetujuan);
    }

    public function update(
        PersetujuanUpdateRequest $request,
        Persetujuan $persetujuan
    ): PersetujuanResource {
        $this->authorize('update', $persetujuan);

        $validated = $request->validated();

        $persetujuan->update($validated);

        return new PersetujuanResource($persetujuan);
    }

    public function destroy(
        Request $request,
        Persetujuan $persetujuan
    ): Response {
        $this->authorize('delete', $persetujuan);

        $persetujuan->delete();

        return response()->noContent();
    }
}
