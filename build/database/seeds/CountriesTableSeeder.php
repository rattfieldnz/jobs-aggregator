<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CountriesTableSeeder
 *
 * A class used to seed the Countries database table.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
class CountriesTableSeeder extends Seeder
{
    public function run(){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('countries')->truncate();

        DB::table('countries')->insert([
            [
                'name' => "New Zealand",
                'meta_desc' => "New Zealand is an island country in the southern Pacific Ocean. The country comprises two main landmasses – the North Island, South Island, and others.",
                'long_desc' => "New Zealand (Māori: Aotearoa) is an island country in the southwestern Pacific Ocean. The country geographically comprises two main landmasses – that of the North Island, or Te Ika-a-Māui, and the South Island, or Te Waipounamu – and numerous smaller islands. New Zealand is situated some 1,500 kilometres (900 mi) east of Australia across the Tasman Sea and roughly 1,000 kilometres (600 mi) south of the Pacific island areas of New Caledonia, Fiji, and Tonga. Because of its remoteness, it was one of the last lands to be settled by humans. During its long isolation, New Zealand developed a distinctive biodiversity of animal, fungal and plant life. The country's varied topography and its sharp mountain peaks, such as the Southern Alps, owe much to the tectonic uplift of land and volcanic eruptions. New Zealand's capital city is Wellington, while its most populous city is Auckland.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}