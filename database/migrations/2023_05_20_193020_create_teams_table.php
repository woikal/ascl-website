<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{

    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('acronym')->nullable();
            $table->string('name')->nullable();
            $table->integer('zvr')->nullable();
            $table->boolean('show')->default(false);
        });

        Schema::create('participant_team', function (Blueprint $table) {
            $table->foreignId('participant_id')->constrained();
            $table->foreignId('team_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
}
