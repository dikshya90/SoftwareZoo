<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReptilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reptiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->string('given_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('life_span');
            $table->string('diet');
            $table->text('habitat');
            $table->bigInteger('global_population');
            $table->date('date_joined');
            $table->bigInteger('height');
            $table->bigInteger('weight');
            $table->string('reproduction_type');
            $table->integer('clutch')->nullable();
            $table->integer('offspring')->nullable();
            $table->string('image');
            $table->tinyInteger('status')->default('0');
            $table->softDeletes();
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
        Schema::dropIfExists('reptiles');
    }
}
