<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('Player_name');
            $table->string('Player_document');
            $table->string('Player_email');
            $table->string('Player_phone');
            $table->string('Player_photo');
            $table->string('Player_age');
            $table->string('Player_number');
            $table->string('Player_position');
            $table->unsignedBigInteger('team_id'); // Clave foránea
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
