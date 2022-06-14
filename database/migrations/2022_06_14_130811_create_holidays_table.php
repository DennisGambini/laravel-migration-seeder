<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->date('departure');
            $table->date('arrival');
            $table->float('price', 7, 2);
            $table->text('img_url')->nullable();
            $table->string('type_of_vacation', 60);
            $table->text('description')->nullable();
            $table->boolean('pets_allowed');
            $table->boolean('refound');
            $table->unsignedSmallInteger('max_people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
