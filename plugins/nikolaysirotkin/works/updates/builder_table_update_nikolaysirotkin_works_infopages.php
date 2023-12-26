<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinWorksInfopages extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_works_infopages', function($table)
    {
        $table->increments('id')->unsigned();
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_works_infopages', function($table)
    {
        $table->dropColumn('id');
    });
}
}
