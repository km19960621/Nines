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
            $table->string('first_batter');
            $table->string('second_batter');
            $table->string('third_batter');
            $table->string('fourth_batter');
            $table->string('fifth_batter');
            $table->string('sixth_batter');
            $table->string('seventh_batter');
            $table->string('eighth_batter');
            $table->string('ninth_batter');
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
