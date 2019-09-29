<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->string('p_fname')->nullable();
            $table->string('p_lname')->nullable();
            $table->string('p_email');
            $table->string('p_phone');
            $table->string('id_no');
            $table->string('p_occupation');
            $table->string('p1_fname');
            $table->string('p1_lname');
            $table->string('p1_email');
            $table->string('p1_phone');
            $table->string('id1_no');
            $table->string('p1_occupation');
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
        Schema::dropIfExists('parents');
    }
}
