<?php
use App\Helpers\CategoryFunctions;

/**
 * Class ConstructionArchitectureCategories
 *
 * A trait used to seed Construction and Architecture sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait ConstructionArchitectureCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Architecture',
            ],
            [
                'name' => 'Drafting',
            ],
            [
                'name' => 'Estimation',
            ],
            [
                'name' => 'Health and Safety',
            ],
            [
                'name' => 'Interior Design',
            ],
            [
                'name' => 'Labouring',
            ],
            [
                'name' => 'Machine Operators',
            ],
            [
                'name' => 'Planning',
            ],
            [
                'name' => 'Project and Contracts Management',
            ],
            [
                'name' => 'Quantity Surveying',
            ],
            [
                'name' => 'Site Management',
            ],
            [
                'name' => 'Supervisors and Forepersons',
            ],
            [
                'name' => 'Surveying',
            ],
        ];

        CategoryFunctions::createCategory('Construction and Architecture', $categories);
    }

}