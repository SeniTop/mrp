<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Persetujuan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserPersetujuansTest extends TestCase
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
    public function it_gets_user_persetujuans(): void
    {
        $user = User::factory()->create();
        $persetujuans = Persetujuan::factory()
            ->count(2)
            ->create([
                'user_id' => $user->id,
            ]);

        $response = $this->getJson(
            route('api.users.persetujuans.index', $user)
        );

        $response->assertOk()->assertSee($persetujuans[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_user_persetujuans(): void
    {
        $user = User::factory()->create();
        $data = Persetujuan::factory()
            ->make([
                'user_id' => $user->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.users.persetujuans.store', $user),
            $data
        );

        $this->assertDatabaseHas('persetujuans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $persetujuan = Persetujuan::latest('id')->first();

        $this->assertEquals($user->id, $persetujuan->user_id);
    }
}
