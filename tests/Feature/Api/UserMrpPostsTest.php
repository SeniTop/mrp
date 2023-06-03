<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\MrpPost;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserMrpPostsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_user_mrp_posts(): void
    {
        $user = User::factory()->create();
        $mrpPosts = MrpPost::factory()
            ->count(2)
            ->create([
                'user_id' => $user->id,
            ]);

        $response = $this->getJson(route('api.users.mrp-posts.index', $user));

        $response->assertOk()->assertSee($mrpPosts[0]->part_plan);
    }

    /**
     * @test
     */
    public function it_stores_the_user_mrp_posts(): void
    {
        $user = User::factory()->create();
        $data = MrpPost::factory()
            ->make([
                'user_id' => $user->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.users.mrp-posts.store', $user),
            $data
        );

        $this->assertDatabaseHas('mrp_posts', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $mrpPost = MrpPost::latest('id')->first();

        $this->assertEquals($user->id, $mrpPost->user_id);
    }
}
