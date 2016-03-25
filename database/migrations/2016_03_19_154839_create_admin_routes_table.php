<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('weekday');
            $table->text('boarding_point');
            $table->text('droping_point');
            $table->text('schedule');
            $table->text('bus_type');
            $table->text('bus_number');
            $table->text('company_name');
            $table->float('fare');
            $table->date('date');
            $table->integer('bus_bus_id')->unsigned();

            //This property requires some analysis
            //$table->integer('bus_company_id');

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
        Schema::drop('admin_routes');
    }
}
