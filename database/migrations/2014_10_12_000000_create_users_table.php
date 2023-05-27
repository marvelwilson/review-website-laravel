<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->text('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type');
            $table->string('status');
            $table->integer('package');
            $table->longText('bio');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}