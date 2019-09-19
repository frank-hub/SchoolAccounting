<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('student_id');
            $table->string('reg_no');
            $table->string('paid_by');
            $table->string('class');
            $table->string('payment_mode');
            $table->string('mpesa_code')->nullable()->unique();
            $table->string('bank_slip_code')->nullable()->unique();
            $table->integer('amount');
            $table->string('served_by');
            $table->timestamps();
            // $table->foreign('student_id')
            // ->references('id')->on('students')
            // ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
