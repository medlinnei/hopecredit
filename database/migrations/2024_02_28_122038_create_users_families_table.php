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
        Schema::create('users_families', function (Blueprint $table) {
            $table->id();
            $table->string('education')->comment('Типы образования')->nullable();
            $table->string('marital_status')->comment('семейный статус')->nullable();
            $table->char('number_of_children')->comment('Количество дитей')->nullable();
            $table->string('whose_name')->comment('Как зовут довереное лицо');
            $table->string('whose_person')->comment('Кем приходиться довереное лицо');
            $table->integer('whose_number')->comment('Номер довереного лица');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_families');
    }
};
