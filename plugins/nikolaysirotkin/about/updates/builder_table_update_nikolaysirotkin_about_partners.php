<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinAboutPartners extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_about_partners', function($table)
    {
        $table->boolean('is_active');
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_about_partners', function($table)
    {
        $table->dropColumn('is_active');
    });
}
}
