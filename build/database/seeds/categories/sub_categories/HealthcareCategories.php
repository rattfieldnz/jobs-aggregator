<?php
use App\Helpers\CategoryFunctions;

/**
 * Class HealthcareCategories
 *
 * A trait used to seed Healthcare sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait HealthcareCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Administration',
            ],
            [
                'name' => 'Caregiving',
            ],
            [
                'name' => 'Community and Social Services',
            ],
            [
                'name' => 'Dentistry',
            ],
            [
                'name' => 'Doctors and Specialists',
            ],
            [
                'name' => 'Fitness and Wellbeing',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Nursing and Midwifery',
            ],
            [
                'name' => 'Occupational Therapy',
            ],
            [
                'name' => 'Pharmacy',
            ],
            [
                'name' => 'Physiotherapy',
            ],
            [
                'name' => 'Psychology and Counselling',
            ],
            [
                'name' => 'Radiography and Sonography',
            ],
            [
                'name' => 'Veterinary',
            ],
        ];

        CategoryFunctions::createCategory('Healthcare', $categories);
    }

}