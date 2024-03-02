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
        Schema::create('users_locations', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('district');
            $table->string('city');
            $table->integer('post_index')->nullable();
            $table->string('street');
            $table->char('house')->comment('Номер дома');
            $table->char('apartment')->comment('Номер квартиры');
            $table->boolean('actual_address_differs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_locations');
    }
};
