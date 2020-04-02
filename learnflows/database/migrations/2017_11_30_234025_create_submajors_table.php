<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submajors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description', 100);
            $table->integer('major_id')->unsigned()->nullable();
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');
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
        Schema::dropIfExists('submajors');
    }
}
