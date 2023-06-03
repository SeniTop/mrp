<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Persetujuan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PersetujuanStoreRequest;
use App\Http\Requests\PersetujuanUpdateRequest;

class PersetujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Persetujuan::class);

        $search = $request->get('search', '');

        $persetujuans = Persetujuan::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.persetujuans.index',
            compact('persetujuans', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Persetujuan::class);

        $users = User::pluck('name', 'id');

        return view('app.persetujuans.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersetujuanStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Persetujuan::class);

        $validated = $request->validated();

        $persetujuan = Persetujuan::create($validated);

        return redirect()
            ->route('persetujuans.edit', $persetujuan)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Persetujuan $persetujuan): View
    {
        $this->authorize('view', $persetujuan);

        return view('app.persetujuans.show', compact('persetujuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Persetujuan $persetujuan): View
    {
        $this->authorize('update', $persetujuan);

        $users = User::pluck('name', 'id');

        return view('app.persetujuans.edit', compact('persetujuan', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        PersetujuanUpdateRequest $request,
        Persetujuan $persetujuan
    ): RedirectResponse {
        $this->authorize('update', $persetujuan);

        $validated = $request->validated();

        $persetujuan->update($validated);

        return redirect()
            ->route('persetujuans.edit', $persetujuan)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Persetujuan $persetujuan
    ): RedirectResponse {
        $this->authorize('delete', $persetujuan);

        $persetujuan->delete();

        return redirect()
            ->route('persetujuans.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
