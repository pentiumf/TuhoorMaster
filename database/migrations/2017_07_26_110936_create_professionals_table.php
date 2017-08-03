<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->integer('procategory_id')->index();
            $table->integer('membership_id')->index();
            $table->string('name');
            $table->text('about');
            $table->text('type');
            $table->string('email');
            $table->string('first_contact');
            $table->string('second_contact');
            $table->integer('country_id')->index();
            $table->string('region');
            $table->string('city');
            $table->string('website');
            $table->string('profile_photo');
            $table->string('cover_photo');
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
        Schema::dropIfExists('professionals');
    }
}
