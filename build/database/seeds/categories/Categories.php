<?php
use App\Category;
use App\Country;
use Carbon\Carbon;
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

        $createdAt = Carbon::now();
        $updatedAt = Carbon::now();
        //Seed first-level categories
        $firstCategories = [
            [
                'name' => 'Accounting',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Agriculture, Fishing, and Forestry',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Automotive',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Banking, Finance, and Insurance',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Construction and Architecture',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Customer Service',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Education',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Engineering',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Executive and General Management',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Government and Council',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Healthcare',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Hospitality and Tourism',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Human Resources and Recruitment',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Information Technology',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Legal',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Manufacturing and Operations',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Marketing, Media, and Communications',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Office and Administration',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Property, Retail, and Sales',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Science and Technology',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Trades and Services',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Transport and Logistics',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ],
            [
                'name' => 'Other',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
                'parent_category_id' => 0
            ]
        ];

        foreach($firstCategories as $c){
            $category = new Category($c);
            $category->save();
        }


        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}