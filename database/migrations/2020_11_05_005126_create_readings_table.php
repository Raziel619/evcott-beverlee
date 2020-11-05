<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('time');
            $table->decimal('bat_voltage', 3,1);
            $table->longText('cmd_2101');
            $table->longText('cmd_2102');
            $table->longText('cmd_2103');
            $table->longText('cmd_2104');
            $table->longText('cmd_2105');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readings');
    }
}
