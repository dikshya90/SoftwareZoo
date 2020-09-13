<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birds', function (Blueprint $table) {
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
            $table->string('nest');
            $table->integer('clutch');
            $table->string('wingspan');
            $table->string('can_fly')->default('yes');
            $table->string('plumage_color');
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
        Schema::dropIfExists('birds');
    }
}
