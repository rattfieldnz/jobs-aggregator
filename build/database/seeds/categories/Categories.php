<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class NewZealandCountry
 *
 * A class used to seed New Zealand country details for the country database table.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
class Categories extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('category')->truncate();

        AccountingCategories::create();
        AgricultureFishingForestryCategories::create();
        AutomotiveCategories::create();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}