<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 01-Jan-2016
 * Time: 22:45
 */

namespace App\Helpers;

use App\Category;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoryFunctions
 * @package app\Helpers
 */
class CategoryFunctions
{

    public static function createCategory($categoryName, Array $children){

        if(strlen($categoryName) < 2){
            throw new Exception("Category name must have more then 2 characters.");
        }
        //Create category
        $createdAt = Carbon::now();
        $updatedAt = Carbon::now();

        $category =
        [
            'name' => $categoryName,
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
            'parent_category_id' => 0
        ];

        (new Category($category))->save();

        //If there are any children for the added category, add them here
        if(count($children) > 0){
            $parentCategoryId = DB::table('category')->where('name', $categoryName)->value('id');
            foreach($children as $c){
                $category = new Category($c);
                $category->parent_category_id = $parentCategoryId;
                $category->save();
            }
        }
    }
}