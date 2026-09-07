<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Sets the header logo, footer logo, and favicon to the new
     * XuluMart logo the client provided. The actual image files
     * (xulumart_logo.png, xulumart_footer_logo.png, xulumart_favicon.png)
     * must be placed in public/images/website/ - they are provided
     * alongside this migration.
     *
     * @return void
     */
    public function up()
    {
        if (DB::table('settings')->where('id', 1)->exists()) {
            $data = [
                'logo'    => 'xulumart_logo.png',
                'favicon' => 'xulumart_favicon.png',
            ];
            if (\Illuminate\Support\Facades\Schema::hasColumn('settings', 'footer_logo')) {
                $data['footer_logo'] = 'xulumart_footer_logo.png';
            }
            DB::table('settings')->where('id', 1)->update($data);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};