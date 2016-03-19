<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('mobile');
            $table->text('password');
            $table->text('gender');
            $table->text('payment_status');

            $table->text('schedule');
            $table->text('boarding_point');
            $table->text('droping_point');
            $table->text('bus_type');
            $table->text('company_name');
            $table->text('bus_number');
            $table->date('date');
            $table->text('seat');
            $table->double('paid');
            $table->integer('bus_bus_id');


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
        Schema::drop('user_routes');
    }
}
