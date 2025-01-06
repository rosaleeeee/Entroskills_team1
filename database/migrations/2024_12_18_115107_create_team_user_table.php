<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamUserTable extends Migration
{
    public function up()
    {
        Schema::create('team_user', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade'); // Relation avec teams
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relation avec users
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_user');
    }
}
