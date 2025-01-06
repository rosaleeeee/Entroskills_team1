<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('name'); // Nom de l'équipe
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
