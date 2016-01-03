<?php
use App\Helpers\CategoryFunctions;

/**
 * Class InformationTechnologyCategories
 *
 * A trait used to seed Information Technology sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait InformationTechnologyCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Architects',
            ],
            [
                'name' => 'Business and Systems Analysts',
            ],
            [
                'name' => 'Data Warehousing and BI',
            ],
            [
                'name' => 'Database',
            ],
            [
                'name' => 'Functional Consultants',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Networking and Storage',
            ],
            [
                'name' => 'Programming and Development',
            ],
            [
                'name' => 'Project Management',
            ],
            [
                'name' => 'Sales and Pre-Sales',
            ],
            [
                'name' => 'Security',
            ],
            [
                'name' => 'Service Desk',
            ],
            [
                'name' => 'Systems Engineers',
            ],
            [
                'name' => 'Telecommunications',
            ],
            [
                'name' => 'Testing',
            ],
            [
                'name' => 'Training',
            ],
            [
                'name' => 'Web Design',
            ],
        ];

        CategoryFunctions::createCategory('Information Technology', $categories);
    }

}