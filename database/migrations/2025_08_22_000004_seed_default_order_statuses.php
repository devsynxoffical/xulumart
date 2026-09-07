<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedDefaultOrderStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * ROOT CAUSE FIX: every order defaults to order_status_id = 1
     * ("Order::$order_status_id default(1)" in the orders table), but the
     * order_statuses table was never seeded and the admin panel has no way
     * to create one (OrderStatusController's methods were empty stubs).
     * That meant $order->status was ALWAYS null, and 5 different admin
     * blade views call $order->status->title / ->color directly with no
     * null-check - so the moment a single order existed, opening the admin
     * Orders list threw a fatal "Attempt to read property on null" (HTTP
     * 500). This migration seeds the standard statuses so the relationship
     * always resolves. It only inserts if the table is empty, so it never
     * touches/duplicates any statuses you may have already created.
     *
     * @return void
     */
    public function up()
    {
        if (DB::table('order_statuses')->count() === 0) {
            DB::table('order_statuses')->insert([
                ['id' => 1, 'title' => 'Pending',    'color' => 'warning', 'is_active' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'title' => 'Processing', 'color' => 'info',    'is_active' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['id' => 3, 'title' => 'Shipped',     'color' => 'primary','is_active' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['id' => 4, 'title' => 'Delivered',   'color' => 'success','is_active' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['id' => 5, 'title' => 'Cancelled',   'color' => 'danger', 'is_active' => 1, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * Intentionally left blank - we never want an automatic rollback to
     * delete order statuses that real orders may already be pointing to.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}