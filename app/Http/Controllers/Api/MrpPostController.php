<?php

namespace App\Http\Controllers\Api;

use App\Models\MrpPost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\MrpPostResource;
use App\Http\Resources\MrpPostCollection;
use App\Http\Requests\MrpPostStoreRequest;
use App\Http\Requests\MrpPostUpdateRequest;

class MrpPostController extends Controller
{
    public function index(Request $request): MrpPostCollection
    {
        $this->authorize('view-any', MrpPost::class);

        $search = $request->get('search', '');

        $mrpPosts = MrpPost::search($search)
            ->latest()
            ->paginate();

        return new MrpPostCollection($mrpPosts);
    }

    public function store(MrpPostStoreRequest $request): MrpPostResource
    {
        $this->authorize('create', MrpPost::class);

        $validated = $request->validated();

        $mrpPost = MrpPost::create($validated);

        return new MrpPostResource($mrpPost);
    }

    public function show(Request $request, MrpPost $mrpPost): MrpPostResource
    {
        $this->authorize('view', $mrpPost);

        return new MrpPostResource($mrpPost);
    }

    public function update(
        MrpPostUpdateRequest $request,
        MrpPost $mrpPost
    ): MrpPostResource {
        $this->authorize('update', $mrpPost);

        $validated = $request->validated();

        $mrpPost->update($validated);

        return new MrpPostResource($mrpPost);
    }

    public function destroy(Request $request, MrpPost $mrpPost): Response
    {
        $this->authorize('delete', $mrpPost);

        $mrpPost->delete();

        return response()->noContent();
    }
}
