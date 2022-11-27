<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('adminName')->nullable();
            $table->string('adminEmail')->nullable();
            $table->text('title')->nullable();
            $table->text('question');
            $table->integer('rating')->nullable();
            $table->text('answer')->nullable();
            $table->tinyInteger('state')->default('0')->description('0-unanwsered, 1-answered');
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
        Schema::dropIfExists('tickets');
    }
}
