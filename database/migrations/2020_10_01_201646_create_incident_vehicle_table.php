<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('incident_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->timestamps();
            $table->foreign('incident_id')->references('id')->on('incidents');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incident_vehicle');
    }
}
