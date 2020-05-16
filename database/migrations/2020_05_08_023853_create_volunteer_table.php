<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longtext('description');
            $table->string('place');
            $table->date('date');
            $table->binary('image_1');
            $table->binary('image_2');
            $table->binary('image_3');
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
        Schema::dropIfExists('volunteer');
    }
}
