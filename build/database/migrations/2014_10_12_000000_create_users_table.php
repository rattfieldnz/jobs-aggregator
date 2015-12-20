<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUsersTable
 *
 * A seeding class to create database schema
 * for the 'users' table.
 *
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('users', function(Blueprint $table)
        {
	        $table->increments('id');
	        $table->string('user_name')->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
	        $table->string('email')->unique();
	        $table->string('password', 60);
            $table->boolean('is_admin')->default(0);
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
        Schema::drop('users');
    }

}

