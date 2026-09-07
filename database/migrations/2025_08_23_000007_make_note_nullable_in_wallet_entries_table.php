<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MakeNoteNullableInWalletEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * ROOT CAUSE FIX: every single registration was crashing with
     * "Field 'note' doesn't have a default value" because
     * RegisterController creates a WalletEntry (signup bonus points)
     * without ever setting 'note', and the column was required with no
     * default. Fixed the controller to always set a note, AND making the
     * column nullable here as a safety net for any other place that
     * creates a WalletEntry.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `wallet_entries` MODIFY `note` VARCHAR(255) NULL DEFAULT NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE `wallet_entries` MODIFY `note` VARCHAR(255) NOT NULL");
    }
}