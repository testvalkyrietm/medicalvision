<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->integer('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('center_name')->nullable();
            $table->string('email');
            $table->integer('country')->references('id')->on('countries');
            $table->integer('title')->references('id')->on('person_titles');
            $table->integer('language')->references('id')->on('languages');
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
        Schema::dropIfExists('submissions');
    }
}
