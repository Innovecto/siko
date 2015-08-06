<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('family_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->string('education', 100)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->integer('family_relation_id')->unsigned();
            $table->string('nationality', 100)->nullable();
            $table->string('passport_number', 16)->nullable();
            $table->string('visa_number', 16)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->bigInteger('father_id')->unsigned()->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->bigInteger('mother_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('family_id')->references('id')->on('families');
            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('family_relation_id')->references('id')->on('family_relations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('family_members');
    }
}
