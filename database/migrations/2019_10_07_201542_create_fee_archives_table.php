<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_archives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class');
            $table->string('student_name');
            $table->string('date_invoice');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->string('fee_type')->nullable();
            $table->integer('balance')->default('0');
            $table->integer('fee_amount');
            $table->integer('paid_amount')->nullable();
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
        Schema::dropIfExists('fee_archives');
    }
}
