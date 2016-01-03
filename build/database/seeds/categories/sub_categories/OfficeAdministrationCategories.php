<?php
use App\Helpers\CategoryFunctions;

/**
 * Class OfficeAdministrationCategories
 *
 * A trait used to seed Office and Administration sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait OfficeAdministrationCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Administration',
            ],
            [
                'name' => 'Data Entry',
            ],
            [
                'name' => 'EA, PA, and Secretarial',
            ],
            [
                'name' => 'Office Management',
            ],
            [
                'name' => 'Reception',
            ],
        ];

        CategoryFunctions::createCategory('Office and Administration', $categories);
    }

}