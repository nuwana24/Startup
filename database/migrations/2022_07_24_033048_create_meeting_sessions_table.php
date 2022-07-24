<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('request_id')->unsigned()->nullable()->index();
            $table->date('date');
            $table->time('time');
            $table->string('sessionLink');
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
        Schema::dropIfExists('meeting_sessions');
    }
};
