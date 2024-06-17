<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelebratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrates', function (Blueprint $table) {
            $table->id();
            
            $table->string('name',191)->nullable();
            $table->string('date',191)->nullable();
            $table->string('time',191)->nullable();
            $table->text('location')->nullable();
            $table->text('description')->nullable();
            $table->string('banner',191)->nullable();
            $table->string('image1',191)->nullable();
            $table->string('image2',191)->nullable();
            $table->string('image3',191)->nullable();
            $table->string('image4',191)->nullable();
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
        Schema::dropIfExists('celebrates');
    }
}
