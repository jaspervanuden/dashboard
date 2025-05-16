<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dashboard_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('block');
            $table->integer('width')->default(3);
            $table->integer('order')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dashboard_blocks');
    }
};
