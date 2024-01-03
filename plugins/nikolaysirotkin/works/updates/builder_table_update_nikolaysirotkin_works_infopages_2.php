<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinWorksInfopages2 extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_works_infopages', function($table)
    {
        $table->string('cta_image');
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_works_infopages', function($table)
    {
        $table->dropColumn('cta_image');
    });
}
}
