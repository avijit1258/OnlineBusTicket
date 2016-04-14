<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('bus_type');
            $table->integer('bus_number')->unique();
            $table->text('company_name');
            $table->integer('no_of_rows');
            $table->integer('no_of_columns');
            $table->text('seats');
            $table->integer('company_id')->unsigned();
            //$table->integer('admin_route_id')->unsigned();
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
        Schema::drop('buses');
    }
}
