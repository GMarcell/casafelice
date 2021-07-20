<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tanda_pengenal');
            $table->integer('gender');
            $table->string('address');
            $table->integer('room_number');
            $table->integer('source');
            $table->integer('room_type');
            $table->string('no_telephone');
            $table->string('email');
            $table->date('check_in_date');
            $table->date('check_out_date');
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
        Schema::dropIfExists('traffics');
    }
}
