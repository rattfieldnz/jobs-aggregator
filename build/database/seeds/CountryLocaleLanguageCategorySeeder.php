<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CountryLocaleLanguageSeeder
 *
 * A class used to seed Country-LocaleLanguage-Category details for the country database table.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
class CountryLocaleLanguageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('country_locale_language_category')->truncate();

        $countryId = DB::table('country')->where('name', 'New Zealand')->value('id');
        $localeLanguageId = DB::table('locale_language')->where('long_code', 'en-nz')->value('id');
        $categories = Category::all();

        foreach($categories as $c){
            DB::table('country_locale_language_category')->insert(
                [
                    'country_id' => $countryId,
                    'locale_language_id' => $localeLanguageId,
                    'category_id' => $c->id,
                ]
            );
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
