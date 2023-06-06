<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('host');
            $table->text('address');
            $table->double('rating');
            $table->integer('like');
            $table->integer('price');
            $table->integer('guest');
            $table->integer('bedroom');
            $table->integer('bed');
            $table->integer('bath');
            $table->integer('wifi');
            $table->integer('parking');
            $table->integer('restaurant');
            $table->integer('ac');
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
        Schema::dropIfExists('homestays');
    }
};
