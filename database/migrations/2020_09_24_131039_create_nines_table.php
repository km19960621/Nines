<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('pitcher');
            $table->string('catcher');
            $table->string('first_baseman');
            $table->string('second_baseman');
            $table->string('third_baseman');
            $table->string('shortstop');
            $table->string('left_fielder');
            $table->string('center_fielder');
            $table->string('right_fielder');
            $table->string('designated_hitter')->nullable();
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
        Schema::dropIfExists('nines');
    }
}
