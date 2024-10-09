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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('FooterAddress')->nullable();
            $table->string('FooterPhone')->nullable();
            $table->string('FooterEmail')->nullable();
            $table->string('OpeningDayOption1')->nullable();
            $table->string('OpeningTimeOption1')->nullable();
            $table->string('OpeningDayOption2')->nullable();
            $table->string('OpeningTimeOption2')->nullable();
            $table->text('FooterNewsletter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
