<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherConversationalAccentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_conversational_accents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("accent_id")->index();
            $table->foreign('accent_id')->references('id')->on('conversational_accents');
            $table->unsignedBigInteger("teacher_id")->index();
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_conversational_accents');
    }
}
