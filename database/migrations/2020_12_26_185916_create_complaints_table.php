<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject')->nullable();
            $table->string('details')->nullable();
            $table->string('area')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('filename')->nullable();
            // $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('complaints');
    }
}
