<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_activated')->default(0);
            $table->text('bio')->nullable();
            $table->dateTime('joined')->nullable();
            $table->dateTime('last_seen')->nullable();
            $table->integer('topic_count')->unsigned()->default(0);
            $table->integer('post_count')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
