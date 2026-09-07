<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MakeDistrictAreaNullableInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Note: uses raw SQL instead of Schema::table()->change() so it works
     * without requiring the doctrine/dbal package to be installed.
     *
     * @return void
     */
    public function up()
    {
        // The checkout form's District/Area fields had been commented out,
        // but 'district_id' and 'area_id' were NOT NULL with no default in
        // the database. Any order submitted without them threw a raw SQL
        // "column cannot be null" fatal error (HTTP 500). Making them
        // nullable here removes that crash risk permanently, regardless of
        // what the checkout form does or doesn't collect.
        DB::statement('ALTER TABLE `orders` MODIFY `district_id` INT NULL DEFAULT NULL');
        DB::statement('ALTER TABLE `orders` MODIFY `area_id` INT NULL DEFAULT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `orders` MODIFY `district_id` INT NOT NULL');
        DB::statement('ALTER TABLE `orders` MODIFY `area_id` INT NOT NULL');
    }
}