<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
