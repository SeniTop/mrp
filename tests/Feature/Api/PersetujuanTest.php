<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Persetujuan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersetujuanTest extends TestCase
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
    public function it_gets_persetujuans_list(): void
    {
        $persetujuans = Persetujuan::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.persetujuans.index'));

        $response->assertOk()->assertSee($persetujuans[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_persetujuan(): void
    {
        $data = Persetujuan::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.persetujuans.store'), $data);

        $this->assertDatabaseHas('persetujuans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_persetujuan(): void
    {
        $persetujuan = Persetujuan::factory()->create();

        $user = User::factory()->create();

        $data = [
            'setuju' => $this->faker->boolean(),
            'tidak' => $this->faker->boolean(),
            'user_id' => $user->id,
        ];

        $response = $this->putJson(
            route('api.persetujuans.update', $persetujuan),
            $data
        );

        $data['id'] = $persetujuan->id;

        $this->assertDatabaseHas('persetujuans', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_persetujuan(): void
    {
        $persetujuan = Persetujuan::factory()->create();

        $response = $this->deleteJson(
            route('api.persetujuans.destroy', $persetujuan)
        );

        $this->assertModelMissing($persetujuan);

        $response->assertNoContent();
    }
}
