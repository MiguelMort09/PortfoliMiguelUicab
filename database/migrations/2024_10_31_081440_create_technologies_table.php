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

        Schema::create('technology_technologyable', function (Blueprint $table) {
            $table->id();
            $table->foreignId('technology_id')
                ->constrained('technologies')
                ->onDelete('cascade');
            $table->string('technologyable_type');
            $table->foreignId('technologyable_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies_technologyable');
        Schema::dropIfExists('technologies');
    }
};
