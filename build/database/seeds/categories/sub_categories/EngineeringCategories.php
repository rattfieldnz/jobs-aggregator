<?php
use App\Helpers\CategoryFunctions;

/**
 * Class EngineeringCategories
 *
 * A trait used to seed Engineering sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait EngineeringCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Building Services',
            ],
            [
                'name' => 'Civil and Structural',
            ],
            [
                'name' => 'Drafting',
            ],
            [
                'name' => 'Electrical',
            ],
            [
                'name' => 'Energy',
            ],
            [
                'name' => 'Environmental',
            ],
            [
                'name' => 'Geotechnical',
            ],
            [
                'name' => 'Industrial',
            ],
            [
                'name' => 'Maintenance',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Mechanical',
            ],
            [
                'name' => 'Project Management',
            ],
            [
                'name' => 'Water and Waste',
            ],
        ];

        CategoryFunctions::createCategory('Engineering', $categories);
    }

}