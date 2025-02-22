<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breacts', function (Blueprint $table) {
            $table->increments('breactID');
            $table->boolean('like')->default(0);
            $table->boolean('dislike')->default(0);
            $table->boolean('love')->default(0);
            $table->integer('blogID')->unsigned()->index();
            $table->foreign('blogID')->references('blogID')->on('blogs')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('userID')->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('breacts');
    }
}
