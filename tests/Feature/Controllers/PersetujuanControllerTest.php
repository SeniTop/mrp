<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Persetujuan;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersetujuanControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_persetujuans(): void
    {
        $persetujuans = Persetujuan::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('persetujuans.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.persetujuans.index')
            ->assertViewHas('persetujuans');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_persetujuan(): void
    {
        $response = $this->get(route('persetujuans.create'));

        $response->assertOk()->assertViewIs('app.persetujuans.create');
    }

    /**
     * @test
     */
    public function it_stores_the_persetujuan(): void
    {
        $data = Persetujuan::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('persetujuans.store'), $data);

        $this->assertDatabaseHas('persetujuans', $data);

        $persetujuan = Persetujuan::latest('id')->first();

        $response->assertRedirect(route('persetujuans.edit', $persetujuan));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_persetujuan(): void
    {
        $persetujuan = Persetujuan::factory()->create();

        $response = $this->get(route('persetujuans.show', $persetujuan));

        $response
            ->assertOk()
            ->assertViewIs('app.persetujuans.show')
            ->assertViewHas('persetujuan');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_persetujuan(): void
    {
        $persetujuan = Persetujuan::factory()->create();

        $response = $this->get(route('persetujuans.edit', $persetujuan));

        $response
            ->assertOk()
            ->assertViewIs('app.persetujuans.edit')
            ->assertViewHas('persetujuan');
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

        $response = $this->put(
            route('persetujuans.update', $persetujuan),
            $data
        );

        $data['id'] = $persetujuan->id;

        $this->assertDatabaseHas('persetujuans', $data);

        $response->assertRedirect(route('persetujuans.edit', $persetujuan));
    }

    /**
     * @test
     */
    public function it_deletes_the_persetujuan(): void
    {
        $persetujuan = Persetujuan::factory()->create();

        $response = $this->delete(route('persetujuans.destroy', $persetujuan));

        $response->assertRedirect(route('persetujuans.index'));

        $this->assertModelMissing($persetujuan);
    }
}
