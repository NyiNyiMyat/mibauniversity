<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('age',191)->nullable();
            $table->string('phone',191)->nullable();
            $table->string('work_experience',191)->nullable();
            $table->text('education_background')->nullable();
            $table->string('course')->nullable();
            $table->string('location')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('enquiries');
    }
}
