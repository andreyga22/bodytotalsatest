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
        Schema::create('actives', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("status");
            $table->double("price");
            $table->integer("quantity");
            $table->double("weight");
            $table->string("brand");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actives');
    }
};
