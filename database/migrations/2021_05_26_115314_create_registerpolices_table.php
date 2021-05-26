<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterpolicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerpolices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('cnic')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('rank')->nullable();
            $table->string('batchno')->nullable();
            $table->string('dateofjoining')->nullable();
            $table->string('date')->nullable();
            $table->boolean('isAcceptLocation')->nullable();
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
        Schema::dropIfExists('registerpolices');
    }
}
