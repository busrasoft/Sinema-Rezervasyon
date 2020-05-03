<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->text('description');
            $table->string('cinema_image');
            $table->string('type_of_movie');
            $table->dateTime('screening_date', 0);
            $table->integer('num_seats');
            $table->boolean('state');  
            $table->timestamps();
            $table->softDeletes('deleted_at', 0); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
