<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriterionTypesTable extends Migration
{
    public function up()
    {
        Schema::create('criterion_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            //            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('criterion_types');
    }
}