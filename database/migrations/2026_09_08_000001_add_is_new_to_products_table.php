<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsNewToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('products') && !Schema::hasColumn('products', 'is_new')) {
            Schema::table('products', function (Blueprint $table) {
                $table->integer('is_new')->default(0)->nullable()->after('is_active');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('products') && Schema::hasColumn('products', 'is_new')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('is_new');
            });
        }
    }
}
