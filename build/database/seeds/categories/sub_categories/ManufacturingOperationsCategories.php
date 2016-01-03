<?php
use App\Helpers\CategoryFunctions;

/**
 * Class ManufacturingOperationsCategories
 *
 * A trait used to seed Manufacturing and Operations sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait ManufacturingOperationsCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Fitters and Machining',
            ],
            [
                'name' => 'Machine Operation',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Process and Assembly',
            ],
            [
                'name' => 'Purchasing and Inventory',
            ],
            [
                'name' => 'Quality Assurance',
            ],
            [
                'name' => 'Storepersons and Warehousing',
            ],
            [
                'name' => 'Supervisors and Forepersons',
            ],
        ];

        CategoryFunctions::createCategory('Manufacturing and Operations', $categories);
    }

}