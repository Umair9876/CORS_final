<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntibullyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antibullyings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('cnic')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('place')->nullable();
            $table->string('date')->nullable();
            $table->string('statusofincident')->nullable(); 
            $table->longText('detailofincident')->nullable(); 
            $table->boolean('isAcceptLocation')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('antibullyings');
    }
}
