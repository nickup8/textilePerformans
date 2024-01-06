<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinAboutLeads extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_about_leads', function($table)
    {
        $table->string('mobile_img');
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_about_leads', function($table)
    {
        $table->dropColumn('mobile_img');
    });
}
}
