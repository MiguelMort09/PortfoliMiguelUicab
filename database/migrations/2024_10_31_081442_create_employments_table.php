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
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('company_name');
            $table->integer('status');
            $table->date('date_init');
            $table->date('date_finished');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('employment_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_id')
                ->constrained('employments')
                ->onDelete('cascade');
            $table->foreignId('skill_id')
                ->constrained('skills')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employments_skills');
        Schema::dropIfExists('employments');
    }
};
