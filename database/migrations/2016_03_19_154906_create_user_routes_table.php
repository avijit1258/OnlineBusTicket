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
            $table->integer('bus_id')->unsigned();
            $table->timestamps();
        });


        //there is a error in adding foreign keys while creating tables migration
        //because the referrence table may not exist at that time . so i added
        //foreign keys at the last migration so that all tables are created
        Schema::table('user_routes', function(Blueprint $table)
        {
            $table->foreign('bus_id')->references('id')->on('buses');
        });
        Schema::table('buses', function(Blueprint $table)
        {
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::table('bus_type', function(Blueprint $table)
        {
            $table->foreign('bus_id')->references('id')->on('buses');
        });
        Schema::table('buses', function(Blueprint $table)
        {
            $table->foreign('admin_route_id')->references('id')->on('admin_routes');
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
