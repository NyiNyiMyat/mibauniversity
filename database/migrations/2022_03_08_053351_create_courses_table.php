<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('banner',191)->nullable();
            $table->string('tumbnail',191)->nullable();
            $table->string('category',191)->nullable();
            $table->string('coursetype',191)->nullable();
            $table->string('coursename',191)->nullable();
            $table->Text('description1');
            $table->Text('description2');
            $table->Text('description3');
            $table->Text('description4');
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
        Schema::dropIfExists('courses');
    }
}
