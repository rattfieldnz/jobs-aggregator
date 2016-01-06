<?php

use App\Feed;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class FeedSeeder
 *
 * A class used to seed Feed-related details for the country database table.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('feed')->truncate();

        $countryId = DB::table('country')->where('name', 'New Zealand')->value('id');

        $feeds = [
            [
                'name' => 'Indeed NZ',
                // http://api.indeed.com/ads/apisearch?publisher=&q=&l=&sort=&radius=&st=&jt=&start=&limit=&fromage=&filter=&latlong=1&co=nz&chnl=&userip=&useragent=&v=2
                'url' => 'http://api.indeed.com/ads/apisearch?publisher='. env('INDEED_PUBLISHER_ID') . '&v=2&co=nz&format=json',
                'param_query_field' => "q",
                'param_location_field' => "l",
                'param_jobtype_field' => "jt",
                'param_userip_field' => "userip",
                'param_useragent_field' => "useragent",
                'country_id' => $countryId
            ],
        ];

        foreach($feeds as $f){
            $feed = new Feed($f);
            $feed->save();
        }


        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
