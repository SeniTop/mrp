<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MrpPost;
use Illuminate\View\View;
use App\Models\Persetujuan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\MrpPostStoreRequest;
use App\Http\Requests\MrpPostUpdateRequest;

class MrpPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', MrpPost::class);

        $search = $request->get('search', '');

        $mrpPosts = MrpPost::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.mrp_posts.index', compact('mrpPosts', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', MrpPost::class);

        $users = User::pluck('name', 'id');
        $persetujuans = Persetujuan::pluck('id', 'id');

        return view('app.mrp_posts.create', compact('users', 'persetujuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MrpPostStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', MrpPost::class);

        $validated = $request->validated();

        $mrpPost = MrpPost::create($validated);

        return redirect()
            ->route('mrp-posts.edit', $mrpPost)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, MrpPost $mrpPost): View
    {
        $this->authorize('view', $mrpPost);

        return view('app.mrp_posts.show', compact('mrpPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, MrpPost $mrpPost): View
    {
        $this->authorize('update', $mrpPost);

        $users = User::pluck('name', 'id');
        $persetujuans = Persetujuan::pluck('id', 'id');

        return view(
            'app.mrp_posts.edit',
            compact('mrpPost', 'users', 'persetujuans')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        MrpPostUpdateRequest $request,
        MrpPost $mrpPost
    ): RedirectResponse {
        $this->authorize('update', $mrpPost);

        $validated = $request->validated();

        $mrpPost->update($validated);

        return redirect()
            ->route('mrp-posts.edit', $mrpPost)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        MrpPost $mrpPost
    ): RedirectResponse {
        $this->authorize('delete', $mrpPost);

        $mrpPost->delete();

        return redirect()
            ->route('mrp-posts.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
