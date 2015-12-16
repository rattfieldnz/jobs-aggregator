<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddParentCategoryIdToCategoryTable
 */
class AddParentCategoryIdToCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function(Blueprint $table)
        {
            $table->integer('parent_category_id')->unsigned();
            $table->foreign('parent_category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function(Blueprint $table)
        {
            $table->dropForeign('category_parent_category_id_foreign');
        });
    }
}
