<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secrets', function (Blueprint $table) {
            $table->increments('id');
            // optional owner/userid
            $table->integer('user_id')->nullable()->default(null);
            // required content
            $table->text('content');
            // optional passcode
            $table->string('passcode');
            // unique url
            $table->string('url')->unique();
            // optional date/time secret expires
            $table->dateTime('expires_at')->nullable();
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
        Schema::drop('secrets');
    }
}
