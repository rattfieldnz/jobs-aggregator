<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration {

	public function up()
	{
		Schema::create('region', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->unique();
			$table->string('meta_desc', 156)->nullable();
			$table->text('long_desc')->nullable();
			$table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('country');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('region');
	}
}