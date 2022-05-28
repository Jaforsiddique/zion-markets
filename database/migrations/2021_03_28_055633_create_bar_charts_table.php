<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bar_name')->nullable();
            $table->string('labels_1')->nullable();
            $table->string('label_1')->nullable();
            $table->integer('data_1')->nullable();
            $table->string('labels_2')->nullable();
            $table->string('label_2')->nullable();
            $table->integer('data_2')->nullable();
            $table->string('labels_3')->nullable();
            $table->string('label_3')->nullable();
            $table->integer('data_3')->nullable();
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
        Schema::dropIfExists('bar_charts');
    }
}
