<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->String('surname',250);
            $table->String('forename',250);
            $table->String('subject',100);
            $table->String('nationality',100);
            $table->String('email',250);
            $table->integer('phone_number');
            $table->text('questions');
            $table->String('source');
            $table->String('manager');
            $table->boolean('is_general');
            $table->boolean('is_emailed');
            $table->boolean('is_highlight');
            $table->boolean('is_special');
            $table->boolean('is_download');
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
        Schema::dropIfExists('students');
    }
}
