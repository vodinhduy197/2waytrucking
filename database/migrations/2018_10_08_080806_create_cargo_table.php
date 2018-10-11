<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {
            $table->increments('cargo_id');
            $table->string('starting_point');
            $table->string('ending_point');
            $table->double('distance');
            $table->unsignedInteger('type_truck_id');
            $table->foreign('type_truck_id')->references('type_truck_id')->on('type_truck');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->datetime('expected_date');
            $table->tinyInteger('export_invoice');
            $table->unsignedInteger('id_type_cargo_status');
            $table->foreign('id_type_cargo_status')->references('id_type_cargo_status')->on('type_cargo_status');
            $table->unsignedInteger('id_type_cargo');
            $table->foreign('id_type_cargo')->references('id_type_cargo')->on('type_cargo');
            $table->string('detail_name_cargo');
            $table->string('export_invoice_address');
            $table->text('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo');
    }
}
