<?php
use App\Helpers\CategoryFunctions;

/**
 * Class PropertyCategories
 *
 * A trait used to seed Property sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait PropertyCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Commercial Sales and Leasing',
            ],
            [
                'name' => 'Consultancy and Valuation',
            ],
            [
                'name' => 'Facilities and Commercial Property Management',
            ],
            [
                'name' => 'Residential Sales and Management',
            ],
        ];

        CategoryFunctions::createCategory('Property', $categories);
    }

}