<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('id_stu',191)->nullable();
            $table->string('name',191)->nullable();
            $table->string('phone',191)->nullable();
            $table->string('course',191)->nullable();
            $table->string('email',191)->nullable();
            $table->text('addess')->nullable();
            $table->string('amount',191)->nullable();
            $table->string('payment_type',191)->nullable();
            $table->string('payment_installment',191)->nullable();
            $table->string('payment_invoice',191)->nullable();
            $table->string('payment_receipt',191)->nullable();
            $table->string('total_payment',191)->nullable();
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
        Schema::dropIfExists('payments');
    }
}
