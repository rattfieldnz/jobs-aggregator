<?php
use App\Helpers\CategoryFunctions;

/**
 * Class MarketingMediaCommunicationsCategories
 *
 * A trait used to seed Marketing, Media, and Communications sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait MarketingMediaCommunicationsCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Advertising',
            ],
            [
                'name' => 'Brand and Product Management',
            ],
            [
                'name' => 'Communications and PR',
            ],
            [
                'name' => 'Design',
            ],
            [
                'name' => 'Digital Marketing',
            ],
            [
                'name' => 'Direct Marketing',
            ],
            [
                'name' => 'Journalism',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Market Research and Analysis',
            ],
            [
                'name' => 'Marketing Assistants and Coordinators',
            ],
        ];

        CategoryFunctions::createCategory('Marketing, Media, and Communications', $categories);
    }

}