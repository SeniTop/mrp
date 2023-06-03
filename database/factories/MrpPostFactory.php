<?php

namespace Database\Factories;

use App\Models\MrpPost;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MrpPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MrpPost::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
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
            'user_id' => \App\Models\User::factory(),
            'persetujuan_id' => \App\Models\Persetujuan::factory(),
        ];
    }
}
