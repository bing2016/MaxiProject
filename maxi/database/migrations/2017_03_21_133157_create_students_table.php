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
            $table->String('first_name',50);
            $table->String('middle_name',50)->nullable();
            $table->String('last_name',50);
            $table->String('nationality',50)->nullable();
            $table->String('email',50);
            $table->String('phone_number',20)->nullable();

            $table->String('department_name',250)->nullable();
            $table->String('course_name',250)->nullable();
            $table->String('level',20)->nullable();
            $table->integer('start_year')->unsigned()->nullable();
            $table->text('questions')->nullable(); 
            $table->boolean('is_applied')->nullable();
            $table->integer('registration_number')->unsigned()->nullable();
            $table->boolean('is_send_now')->default(thrue); //special memail

            $table->String('manager', 100)->nullable();
            $table->String('place', 100)->nullable();
            $table->date('date')->nullable(); 
            $table->String('source',250)->nullable();
            $table->boolean('is_highlight')->default(false);
            $table->boolean('is_emailed')->default(false);
            $table->boolean('is_download')->default(false);

            $table->unique('email');
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
