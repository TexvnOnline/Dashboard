<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('park_id');

            $table->string('name');
            $table->string('type');
            $table->decimal('level')->nullable();
            $table->enum('status',['ACTIVATED','DISABLED'])->default('DISABLED');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('park_id')->references('id')->on('parks')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensors');
    }
}
