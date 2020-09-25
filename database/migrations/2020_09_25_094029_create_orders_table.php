<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('nine_id');
            $table->integer('first_batter');
            $table->integer('second_batter');
            $table->integer('third_batter');
            $table->integer('fourth_batter');
            $table->integer('fifth_batter');
            $table->integer('sixth_batter');
            $table->integer('seventh_batter');
            $table->integer('eighth_batter');
            $table->integer('ninth_batter');
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
        Schema::dropIfExists('orders');
    }
}
