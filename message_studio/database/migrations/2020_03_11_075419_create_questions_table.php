<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('firstName');
            $table->string('lastName');
            $table->boolean('answered')->default(false);
            $table->boolean('seen')->default(false);
            $table->string('email');
            $table->longText('body');
            $table->longText('category');
            $table->longText('answer')->default("");
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
        Schema::dropIfExists('questions');
    }
}
