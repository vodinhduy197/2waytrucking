<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payload', function (Blueprint $table) {
            $table->increments('id_payload');
            $table->string('name');
            $table->unsignedInteger('type_truck_id');
            $table->foreign('type_truck_id')->references('type_truck_id')->on('type_truck');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payload');
    }
}
