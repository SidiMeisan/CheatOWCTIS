<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCOVIDTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covidtest', function (Blueprint $table) {
            $table->id();
            $table->foreignId('centre_office_id');
            $table->foreignId('test_kit_id');
            $table->foreignId('patient_id');
            $table->string('test_id')->nullable();
            $table->date('test_date')->nullable();
            $table->string('result')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('covidtest');
    }
}
