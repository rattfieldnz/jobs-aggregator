<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCountryLocaleLanguageCategoryTable
 *
 * A seeding class to create database schema
 * for the 'country_locale_language_category' table.
 *
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class CreateCountryLocaleLanguageCategoryTable extends Migration {

	public function up()
	{
		Schema::create('country_locale_language_category', function(Blueprint $table) {
            $table->integer('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('country');
            $table->integer('locale_language_id')->unsigned();
			$table->foreign('locale_language_id')->references('id')->on('locale_language');
            $table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('category');
		});
	}

	public function down()
	{
		Schema::drop('country_locale_language_category');
	}
}