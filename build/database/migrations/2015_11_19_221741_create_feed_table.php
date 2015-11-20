<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedTable extends Migration {

	public function up()
	{
		Schema::create('feed', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 45)->unique();
			$table->string('url', 255)->unique();
			$table->string('url_parameters', 255);
			$table->string('publisher_id', 50)->nullable();
			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('country');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('feed');
	}
}