<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumettisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumettis', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->text('description',500);
            $table->string('image',1000);
            $table->tinyInteger('price');
            $table->string('series', 200);
            $table->string('sale_date',30);
            $table->string('type', 50);
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
        Schema::dropIfExists('fumettis');
    }
}
