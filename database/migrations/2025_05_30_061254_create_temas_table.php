<?php

use App\Models\tema;
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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string("temanev");
            $table->timestamps();
        });

        tema::create([
            'temanev' => 'tema1'
        ]);
        tema::create([
            'temanev' => 'tema2'
        ]);
        tema::create([
            'temanev' => 'tema3'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
