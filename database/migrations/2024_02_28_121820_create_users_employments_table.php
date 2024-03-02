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
        Schema::create('users_employments', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_employment')
                ->comment('Тип зайнятости')->nullable();
            $table->integer('income')->comment('Уровень дохода')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_employments');
    }
};
