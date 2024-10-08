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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('duration')->nullable();
            $table->string('key_point')->nullable();
            $table->enum('status', [0, 1])->nullable()->comment('0=>inactive,1=>active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
