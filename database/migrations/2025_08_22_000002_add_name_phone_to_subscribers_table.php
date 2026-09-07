<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamePhoneToSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscribers', function (Blueprint $table) {
            $table->string('name')->nullable()->after('email');
            $table->string('phone')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscribers', function (Blueprint $table) {
            $table->dropColumn(['name', 'phone']);
        });
    }
}