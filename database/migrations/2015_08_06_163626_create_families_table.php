<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->increments('id');
            $table->string('family_number', 32);
            $table->bigInteger('leader')->unsigned();
            $table->date('issued_date');
            $table->integer('province')->unsigned();
            $table->integer('city')->unsigned();
            $table->integer('subdistrict')->unsigned();
            $table->integer('village')->unsigned();
            $table->integer('cluster')->unsigned();
            $table->integer('subcluster')->unsigned();

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('leader')->references('id')->on('members');
            $table->foreign('province')->references('id')->on('locations');
            $table->foreign('city')->references('id')->on('locations');
            $table->foreign('subdistrict')->references('id')->on('locations');
            $table->foreign('village')->references('id')->on('locations');
            $table->foreign('cluster')->references('id')->on('locations');
            $table->foreign('subcluster')->references('id')->on('locations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('families');
    }
}
