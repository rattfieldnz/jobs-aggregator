<?php
use App\Helpers\CategoryFunctions;

/**
 * Class HospitalityTourismCategories
 *
 * A trait used to seed Hospitality and Tourism sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait HospitalityTourismCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Bar Staff and Baristas',
            ],
            [
                'name' => 'Chefs',
            ],
            [
                'name' => 'Housekeeping',
            ],
            [
                'name' => 'Kitchen Staff',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Reception and Front Desk',
            ],
            [
                'name' => 'Tourism and Tour Guides',
            ],
            [
                'name' => 'Travel Consultants',
            ],
            [
                'name' => 'Waiting Staff',
            ],
        ];

        CategoryFunctions::createCategory('Hospitality and Tourism', $categories);
    }

}