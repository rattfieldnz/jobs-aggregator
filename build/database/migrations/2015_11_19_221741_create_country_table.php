<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountryTable extends Migration {

	public function up()
	{
		Schema::create('country', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->unique();
			$table->string('meta_desc', 156)->nullable();
			$table->text('long_desc')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('country');
	}
}