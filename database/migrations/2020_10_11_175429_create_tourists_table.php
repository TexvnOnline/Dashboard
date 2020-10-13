<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->string('province');
            $table->string('district');
            $table->string('image');
            $table->string('imageDescription');
            $table->string('image360');
            $table->string('imageDescription360');
            
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
        Schema::dropIfExists('tourists');
    }
}
