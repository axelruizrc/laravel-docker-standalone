<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('level');
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}

