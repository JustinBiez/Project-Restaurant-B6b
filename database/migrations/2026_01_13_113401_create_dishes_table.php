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
        Schema::create('gerechten', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naam');
            $table->text('beschrijving')->nullable();
            $table->decimal('prijs', 10, 2);
            $table->string('catagorie');
            $table->foreignid('ingredienten')->references('id')->on('ingredients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerechten');
    }
};
