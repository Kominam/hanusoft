<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->tinyInteger('gender')->default(0);
            $table->string('address')->default('empty');
            $table->text('bio');
            $table->string('phone')->nullable()->default('empty');
            $table->date('birthday')->nullable();
            $table->string('url_fb')->default('empty');
            $table->string('url_gmail')->default('empty');
            $table->string('url_github')->default('empty');
            $table->string('url_avt')->default('empty');
            $table->integer('position_id')->unsigned()->nullable();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->integer('grade_id')->unsigned()->nullable();
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
