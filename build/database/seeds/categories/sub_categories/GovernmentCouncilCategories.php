<?php
use App\Helpers\CategoryFunctions;

/**
 * Class GovernmentCouncilCategories
 *
 * A trait used to seed Government and Council sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait GovernmentCouncilCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Central Government',
            ],
            [
                'name' => 'Defence',
            ],
            [
                'name' => 'Local and Regional Council',
            ],
        ];

        CategoryFunctions::createCategory('Government and Council', $categories);
    }

}