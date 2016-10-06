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
            $table->string('password');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('bio')->nullable();
            $table->string('url_fb')->nullable();
            $table->string('url_gmail')->nullable();
            $table->string('url_github')->nullable();
            $table->string('url_avt')->nullable();
            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
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
