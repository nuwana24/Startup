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
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->integer('created_user_id')->unsigned()->nullable()->index();
            $table->string('startupName');
            $table->string('webUrl')->nullable();
            $table->string('tagline');
            $table->string('logo')->nullable();
            $table->string('telephone');
            $table->string('companyName');
            $table->string('businessRegistrationNumber');
            $table->date('foundedDate')->nullable();
            $table->string('startupCategory');
            $table->longText('description')->nullable();
            $table->integer('numberOfEmployees')->nullable();
            $table->string('founderName')->nullable();
            $table->string('founderEmail')->nullable();
            $table->string('founderTelephone')->nullable();
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
        Schema::dropIfExists('startups');
    }
};
