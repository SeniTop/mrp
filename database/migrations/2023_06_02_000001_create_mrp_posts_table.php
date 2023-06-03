<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mrp_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('part_plan');
            $table->string('part_descr');
            $table->string('manuf')->nullable();
            $table->string('manuf_part_no');
            $table->string('comm_group');
            $table->string('mrp_pr_no');
            $table->string('qty_mrp_plan_o');
            $table->string('qty_mrp_on_hand');
            $table->string('qty_available');
            $table->string('qty_safety_stock');
            $table->string('qty_wo_demmand');
            $table->string('qty_multiple_lot_size');
            $table->string('wo_no');
            $table->string('qty_pr_supply');
            $table->string('pr_supply_no');
            $table->string('qty_po_supply');
            $table->string('po_supply_no');
            $table->string('qty_arrived_po');
            $table->string('arrived_po_supply_no');
            $table->string('uom');
            $table->string('buyer_group');
            $table->string('remarks');
            $table->string('budget');
            $table->unsignedBigInteger('persetujuan_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrp_posts');
    }
};
