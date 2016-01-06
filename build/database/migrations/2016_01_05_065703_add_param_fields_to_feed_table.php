<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddParamFieldsToFeedTable
 */
class AddParamFieldsToFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feed', function(Blueprint $table)
        {
            $table->string('param_query_field')->after('url');
            $table->string('param_location_field')->after('param_query_field');
            $table->string('param_jobtype_field')->nullable()->after('param_location_field');
            $table->string('param_userip_field')->nullable()->after('param_jobtype_field');
            $table->string('param_callback_field')->nullable()->after('param_userip_field');
            $table->string('param_useragent_field')->nullable()->after('param_callback_field');
            $table->string('param_publisherid_field')->nullable()->after('param_useragent_field');

            $table->dropColumn('url_parameters');
            $table->dropColumn('publisher_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feed', function (Blueprint $table) {
            $table->dropColumn('param_query_field');
            $table->dropColumn('param_location_field');
            $table->dropColumn('param_jobtype_field');
            $table->dropColumn('param_userip_field');
            $table->dropColumn('param_callback_field');
            $table->dropColumn('param_useragent_field');
            $table->dropColumn('param_publisherid_field');

            $table->string('url_parameters', 255);
            $table->string('publisher_id', 50)->nullable();
        });
    }
}
