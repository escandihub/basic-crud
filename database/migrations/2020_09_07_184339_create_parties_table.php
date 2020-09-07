<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->String('name');
            $table->String('objective');
            $table->String('location');
=======
            $table->string('name');
            $table->string('objective');
            $table->string('location');
>>>>>>> ccfd7fef0114de6eb5f8c5e92f6d130eb861af04
            $table->integer('number_guests');
            $table->integer('date');
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
        Schema::dropIfExists('parties');
    }
}
