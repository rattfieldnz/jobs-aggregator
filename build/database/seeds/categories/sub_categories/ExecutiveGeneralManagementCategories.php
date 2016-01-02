<?php
use App\Helpers\CategoryFunctions;

/**
 * Class ExecutiveGeneralManagementCategories
 *
 * A trait used to seed Executive and General Management sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait ExecutiveGeneralManagementCategories{

    public static function create(){
        $categories = [];

        CategoryFunctions::createCategory('Executive and General Management', $categories);
    }

}