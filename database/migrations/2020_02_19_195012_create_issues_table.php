<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('type');//bug, improvement, new feature
            $table->string('status');//to-do,in-progress,done,review
            $table->string('priority'); //low, medium, high
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('user_id'); //Creator
            $table->unsignedBigInteger('assigned_to_id');
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
        Schema::dropIfExists('issues');
    }
}
