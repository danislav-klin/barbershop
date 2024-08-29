<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servics', function (Blueprint $table) {
            $table->id();
            $table->string('name_service');
            $table->text('description');
            $table->string('price_of_top_master');
            $table->string('price_of_master');
            $table->string('price_of_junior');
            $table->string('name_file_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servics');
    }
};
