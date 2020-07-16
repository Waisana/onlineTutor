<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subcode');
            $table->string('name');
            $table->string('notes');
            $table->string('term');
            $table->timestamps();
            
            $table->unsignedBigInteger('assign_id');
            $table->foreign('assign_id')
                  ->references('id')->on('assignements')
                  ->onDelete('cascade');
            $table->index('assign_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
