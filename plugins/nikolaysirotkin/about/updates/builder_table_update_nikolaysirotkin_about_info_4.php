<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinAboutInfo4 extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_about_info', function($table)
    {
        $table->text('home_text')->nullable();
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_about_info', function($table)
    {
        $table->dropColumn('home_text');
    });
}
}
