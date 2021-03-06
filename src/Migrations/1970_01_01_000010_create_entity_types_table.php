<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityTypesTable extends Migration
{
    public function up()
    {
        Schema::create('entity_types', function (Blueprint $table) {
            $table->integer('entity_id')->unsigned();
            $table->increments('id');
            $table->string('entity_class', 250);
        });
    }

    public function down()
    {
        Schema::dropIfExists('entity_types');
    }
}
