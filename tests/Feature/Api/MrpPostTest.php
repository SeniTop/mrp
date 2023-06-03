<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\MrpPost;

use App\Models\Persetujuan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MrpPostTest extends TestCase
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
    public function it_gets_mrp_posts_list(): void
    {
        $mrpPosts = MrpPost::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.mrp-posts.index'));

        $response->assertOk()->assertSee($mrpPosts[0]->part_plan);
    }

    /**
     * @test
     */
    public function it_stores_the_mrp_post(): void
    {
        $data = MrpPost::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.mrp-posts.store'), $data);

        $this->assertDatabaseHas('mrp_posts', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_mrp_post(): void
    {
        $mrpPost = MrpPost::factory()->create();

        $user = User::factory()->create();
        $persetujuan = Persetujuan::factory()->create();

        $data = [
            'part_plan' => $this->faker->text(255),
            'part_descr' => $this->faker->text(255),
            'manuf' => $this->faker->text(255),
            'manuf_part_no' => $this->faker->text(255),
            'comm_group' => $this->faker->text(255),
            'mrp_pr_no' => $this->faker->text(255),
            'qty_mrp_plan_o' => $this->faker->text(255),
            'qty_mrp_on_hand' => $this->faker->text(255),
            'qty_available' => $this->faker->text(255),
            'qty_safety_stock' => $this->faker->text(255),
            'qty_wo_demmand' => $this->faker->text(255),
            'qty_multiple_lot_size' => $this->faker->text(255),
            'wo_no' => $this->faker->text(255),
            'qty_pr_supply' => $this->faker->text(255),
            'pr_supply_no' => $this->faker->text(255),
            'qty_po_supply' => $this->faker->text(255),
            'po_supply_no' => $this->faker->text(255),
            'qty_arrived_po' => $this->faker->text(255),
            'arrived_po_supply_no' => $this->faker->text(255),
            'uom' => $this->faker->text(255),
            'buyer_group' => $this->faker->text(255),
            'remarks' => $this->faker->text(255),
            'budget' => $this->faker->text(255),
            'user_id' => $user->id,
            'persetujuan_id' => $persetujuan->id,
        ];

        $response = $this->putJson(
            route('api.mrp-posts.update', $mrpPost),
            $data
        );

        $data['id'] = $mrpPost->id;

        $this->assertDatabaseHas('mrp_posts', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_mrp_post(): void
    {
        $mrpPost = MrpPost::factory()->create();

        $response = $this->deleteJson(route('api.mrp-posts.destroy', $mrpPost));

        $this->assertModelMissing($mrpPost);

        $response->assertNoContent();
    }
}
