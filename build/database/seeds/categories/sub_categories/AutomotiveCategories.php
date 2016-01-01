<?php
use App\Helpers\CategoryFunctions;

/**
 * Class AutomotiveSubCategories
 *
 * A trait used to seed Automotive sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait AutomotiveCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Automotive Technician',
            ],
            [
                'name' => 'Diesel Mechanic',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Panel and Paint',
            ],
            [
                'name' => 'Sales, Operations, and Parts',
            ],
        ];

        CategoryFunctions::createCategory('Automotive', $categories);
    }

}