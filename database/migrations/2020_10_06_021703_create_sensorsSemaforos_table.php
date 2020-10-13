<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsSemaforos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensorsSemaforos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('semaforo_id');

            $table->string('name');
            $table->string('type');
            $table->decimal('level')->nullable();
            $table->enum('status',['ACTIVATED','DISABLED'])->default('DISABLED');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('semaforo_id')->references('id')->on('semafros')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensorsSemaforos');
    }
}
