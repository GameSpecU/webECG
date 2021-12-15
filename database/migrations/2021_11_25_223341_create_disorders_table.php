<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisordersTable extends Migration
{
    public function up()
    {
        Schema::create('disorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            //            $table->unsignedInteger('frequency')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disorders');
    }
}
