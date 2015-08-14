<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('zipcode', 6)->nullable();
            $table->integer('parent')->unsigned();
            $table->tinyInteger('level')->unsigned(); // 1:province, 2:city, 3:subdistrict, 4:village, 5:cluster/RW, 6:subcluster/RT
            $table->bigInteger('leader')->unsigned()->nullable();
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
        Schema::drop('locations');
    }
}
