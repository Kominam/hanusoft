<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('link_preview');
            $table->text('description');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('projecttypes')->onDelete('cascade');
            $table->date('start_date');
            $table->date('plan_end_date');
            $table->date('actual_end_date')->nullable();
            $table->string('link_github');
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
