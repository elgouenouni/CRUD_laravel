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
        Schema::create('formateur_groupe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formateur_id')->constraint();
            $table->foreignId('groupe_id')->constraint();
            $table->string('annee_formation',100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateur_groupe');
    }
};
