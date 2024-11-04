<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('type');
            $table->string('icon');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('technologyables', function (Blueprint $table) {
            $table->id();
            $table->integer('technology_id');
            $table->integer('technologyable_id');
            $table->string('technologyable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologyables');
        Schema::dropIfExists('technologies');
    }
};
