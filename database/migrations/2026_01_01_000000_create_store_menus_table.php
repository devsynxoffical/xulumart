<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('store_menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->integer('position')->default(1);
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('store_menus');
    }
};
