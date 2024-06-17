<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('id_stu',191)->nullable();
            $table->string('name',191)->nullable();
            $table->string('course',191)->nullable();
            $table->string('type',191)->nullable();
            $table->string('dob',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('emailtype',191)->nullable();
            $table->text('comm')->nullable();
            $table->string('photo',191)->nullable();
            $table->string('month',191)->nullable();
            $table->string('day',191)->nullable();
           
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
        Schema::dropIfExists('mails');
    }
}
