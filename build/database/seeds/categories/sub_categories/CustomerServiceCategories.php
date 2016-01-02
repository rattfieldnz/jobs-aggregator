<?php
use App\Helpers\CategoryFunctions;

/**
 * Class CustomerServiceCategories
 *
 * A trait used to seed Customer Service sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait CustomerServiceCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Call Centre',
            ],
            [
                'name' => 'Customer-Facing',
            ],
            [
                'name' => 'Management',
            ],
        ];

        CategoryFunctions::createCategory('Customer Service', $categories);
    }

}