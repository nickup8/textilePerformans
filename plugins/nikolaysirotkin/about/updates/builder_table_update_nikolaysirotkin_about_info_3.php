<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinAboutInfo3 extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_about_info', function($table)
    {
        $table->string('title_image_alt');
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_about_info', function($table)
    {
        $table->dropColumn('title_image_alt');
    });
}
}
