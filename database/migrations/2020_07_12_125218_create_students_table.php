<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('users_id');
            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->index('users_id'); 
            $table->string('class_id');
            $table->foreign('class_id')
                ->references('id')->on('classes')
                ->onDelete('cascade');
            $table->index('class_id');
            $table->string('parentnames');
            $table->string('parentemail');
            $table->string('parentphone');
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
