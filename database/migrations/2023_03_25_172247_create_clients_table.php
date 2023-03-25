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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("secondName")->nullable();
            $table->string("firstLastName");
            $table->string("secondLastName")->nullable();
            $table->integer("age");
            $table->string("nationalId")->unique();
            $table->double("weight");
            $table->double("height");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
