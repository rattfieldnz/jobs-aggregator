<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateLocaleLanguageTable
 *
 * A seeding class to create database schema
 * for the 'locale_language' table.
 *
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class CreateLocaleLanguageTable extends Migration {

	public function up()
	{
		Schema::create('locale_language', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('short_code', 2)->unique();
			$table->string('long_code', 5);
			$table->string('name', 50)->unique();
		});
	}

	public function down()
	{
		Schema::drop('locale_language');
	}
}