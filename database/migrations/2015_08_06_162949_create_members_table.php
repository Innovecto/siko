<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_number', 32)->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->integer('birthplace')->unsigned();
            $table->enum('gender', ['m', 'f']);
            $table->integer('religion_id')->unsigned();
            $table->string('occupation', 100);
            $table->enum('marital_status', ['single', 'married', 'widow', 'divorce']);

            $table->integer('province')->unsigned();
            $table->integer('city')->unsigned();
            $table->integer('subdistrict')->unsigned();
            $table->integer('village')->unsigned();
            $table->integer('cluster')->unsigned();
            $table->integer('subcluster')->unsigned();
            
            $table->string('email')->nullable();
            $table->string('password', 32)->nullable();
            $table->boolean('is_active')->default(false);
            $table->date('activated_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('birthplace')->references('id')->on('locations');
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
        Schema::drop('members');
    }

}
