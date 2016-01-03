<?php
use App\Helpers\CategoryFunctions;

/**
 * Class LegalCategories
 *
 * A trait used to seed Legal sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait LegalCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'In-House Counsel',
            ],
            [
                'name' => 'Private Practise',
            ],
            [
                'name' => 'Secretarial',
            ],
        ];

        CategoryFunctions::createCategory('Legal', $categories);
    }

}