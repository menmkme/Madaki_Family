<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadakisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madakis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_Name');
            $table->string('Surname');
            $table->string('Last_Name');
            $table->date('DOB');
            $table->string('State');
            $table->string('LGA');
            $table->text('Description');
            $table->string('img_path');
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
        Schema::dropIfExists('madakis');
    }
}
