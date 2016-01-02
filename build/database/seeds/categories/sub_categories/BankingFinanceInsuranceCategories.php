<?php
use App\Helpers\CategoryFunctions;

/**
 * Class BankingFinanceInsuranceCategories
 *
 * A trait used to seed Banking, Finance, and Insurance sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait BankingFinanceInsuranceCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Analysts',
            ],
            [
                'name' => 'Client Services',
            ],
            [
                'name' => 'Corporate and Institutional Banking',
            ],
            [
                'name' => 'Credit and Lending',
            ],
            [
                'name' => 'Credit and Lending',
            ],
            [
                'name' => 'Financial Planning and Investment',
            ],
            [
                'name' => 'Insurance',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Risk and Compliance',
            ],
            [
                'name' => 'Settlements',
            ],
            [
                'name' => 'Tellers and Branch Staff',
            ],
        ];

        CategoryFunctions::createCategory('Banking, Finance, and Insurance', $categories);
    }

}