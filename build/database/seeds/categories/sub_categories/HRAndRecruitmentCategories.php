<?php
use App\Helpers\CategoryFunctions;

/**
 * Class HRAndRecruitmentCategories
 *
 * A trait used to seed HR and Recruitment sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait HRAndRecruitmentCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Health and Safety',
            ],
            [
                'name' => 'HR',
            ],
            [
                'name' => 'Recruitment',
            ],
        ];

        CategoryFunctions::createCategory('HR and Recruitment', $categories);
    }

}