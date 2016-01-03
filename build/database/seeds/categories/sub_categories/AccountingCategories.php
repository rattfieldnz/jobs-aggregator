<?php
use App\Helpers\CategoryFunctions;

/**
 * Class AccountingCategories
 *
 * A trait used to seed Accounting sub-categories.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
trait AccountingCategories{

    public static function create(){
        $categories = [
            [
                'name' => 'Accountants',
            ],
            [
                'name' => 'Accounts Administrators',
            ],
            [
                'name' => 'Accounts Payable',
            ],
            [
                'name' => 'Accounts Receivable',
            ],
            [
                'name' => 'Analysts',
            ],
            [
                'name' => 'Finance Managers and Controllers',
            ],
            [
                'name' => 'Management',
            ],
            [
                'name' => 'Payroll',
            ],
        ];

        CategoryFunctions::createCategory('Accounting', $categories);
    }
}