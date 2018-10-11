<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('name', 100);
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->string('address', 255);
            $table->string('picture', 100);
            $table->datetime('created_at');
            $table->integer('id_type_user_status');
            $table->integer('id_type_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
