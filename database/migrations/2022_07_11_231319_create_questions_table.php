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
            $table->id();
           $table->string("qst")->nullable()->default('0');
           $table->string('a')->nullable()->default('0');
           $table->string('b')->nullable()->default('0');
           $table->string('c')->nullable()->default('0');
           $table->string('d')->nullable()->default('0');
           $table->string('ans')->nullable()->default('0');
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