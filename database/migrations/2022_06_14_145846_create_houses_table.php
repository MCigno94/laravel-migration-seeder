<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address',100);
            $table->string('city',50);
            $table->string('zip_code',10);
            $table->tinyInteger('rooms')->unsigned();
            $table->smallInteger('square_meters')->unsigned();
            $table->string('type',50);
            $table->decimal('price', 9,2);
            $table->string('image',255);
            $table->text('description');
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
        Schema::dropIfExists('houses');
    }
}