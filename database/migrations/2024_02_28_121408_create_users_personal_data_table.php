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
        Schema::create('users_personal_data', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_father');
            $table->string('birthday');
            $table->string('email')->unique();
            $table->enum('type_passport', ['old_type', 'new_type']);
            $table->string('episode');
            $table->integer('number_passport')->unique();
            $table->integer('ipn')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_personal_data');
    }
};
