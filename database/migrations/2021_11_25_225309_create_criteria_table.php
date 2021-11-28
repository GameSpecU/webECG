<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaTable extends Migration
{
    public function up()
    {
        Schema::create('criteria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->foreignId('criterion_type_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('criteria');
    }
}