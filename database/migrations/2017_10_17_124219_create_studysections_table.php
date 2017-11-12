<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudysectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studysections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('subject');
            $table->string('description');
            $table->date('s_date');
            $table->string('name');
            $table->integer('minutes');
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
        Schema::dropIfExists('studysections');
    }
}
