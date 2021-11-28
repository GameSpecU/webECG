<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('disorder_id')->constrained();
            $table->foreignId('criterion_id')->constrained();
            $table->string('rule');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rules');
    }
}