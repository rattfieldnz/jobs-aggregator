<?php
use App\Helpers\CategoryFunctions;

/**
 * Class AgricultureFishingForestrySubCategories
 *
 * A trait used to seed Agriculture, Fishing, and Forestry sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait AgricultureFishingForestryCategories{
    public static function create(){
        $categories = [
            [
                'name' => 'Farming',
            ],
            [
                'name' => 'Fishing',
            ],
            [
                'name' => 'Forestry',
            ],
            [
                'name' => 'Horticulture',
            ],
        ];

        CategoryFunctions::createCategory('Agriculture, Fishing, and Forestry', $categories);
    }
}