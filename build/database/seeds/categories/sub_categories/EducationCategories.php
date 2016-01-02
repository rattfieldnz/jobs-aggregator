<?php
use App\Helpers\CategoryFunctions;

/**
 * Class EducationCategories
 *
 * A trait used to seed Education sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait EducationCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Au Pairs and Nannies',
            ],
            [
                'name' => 'Early Childhood',
            ],
            [
                'name' => 'Primary',
            ],
            [
                'name' => 'Secondary',
            ],
            [
                'name' => 'Tertiary',
            ],
            [
                'name' => 'Tutoring and Training',
            ],
        ];

        CategoryFunctions::createCategory('Education', $categories);
    }

}