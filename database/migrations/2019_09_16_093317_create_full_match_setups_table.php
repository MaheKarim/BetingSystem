<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullMatchSetupsTable extends Migration
{

    public function up()
    {
        Schema::create('full_match_setups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_1');
            $table->integer('team_2');
            $table->timestamp("begin");
            $table->string('local_time')->nullable();
            $table->string('gmt_time')->nullable();
            $table->integer('match_type')->nullable();
            $table->integer('net_rate')->nullable();
            $table->integer('bounce_rate')->nullable();
            $table->string('extra_deduction')->nullable();
            $table->integer('bounce_team')->nullable();
            $table->integer('net_team')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('full_match_setups');
    }
}
