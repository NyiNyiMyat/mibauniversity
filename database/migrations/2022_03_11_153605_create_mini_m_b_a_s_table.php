<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiniMBASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_m_b_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('pro',191)->nullable();
            $table->string('pay',191)->nullable();
            $table->string('nrcf',191)->nullable();
            $table->string('nrcb',191)->nullable();
            
            $table->string('course',191)->nullable();
            $table->string('campus',191)->nullable();
            $table->string('intake',191)->nullable();
            $table->string('type',191)->nullable();
            $table->string('fullname',191)->nullable();
            $table->string('gender',191)->nullable();
            $table->string('dob',191)->nullable();
            $table->string('nrc',191)->nullable();
            $table->string('nation',191)->nullable();
            $table->string('relig',191)->nullable();
            $table->string('father',191)->nullable();
            $table->string('stu_ph',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('address',191)->nullable();

            $table->string('occupation',191)->nullable();
            $table->string('com_name',191)->nullable();
            $table->string('com_ph',191)->nullable();
            $table->string('ad_year',191)->nullable();
            $table->string('university',191)->nullable();
            $table->string('degree',191)->nullable();
            $table->string('major',191)->nullable();
            $table->string('other_ql',191)->nullable();
            $table->string('location',191)->nullable();
            $table->string('certificate',191)->nullable();

            $table->string('ad_date',191)->nullable();
            $table->string('em_name',191)->nullable();
            $table->string('em_rela',191)->nullable();
            $table->string('em_comph',191)->nullable();
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
        Schema::dropIfExists('mini_m_b_a_s');
    }
}
