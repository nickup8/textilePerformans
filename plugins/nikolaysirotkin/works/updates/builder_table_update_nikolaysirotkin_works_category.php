<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinWorksCategory extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_works_category', function($table)
    {
        $table->string('image')->nullable();
        $table->string('image_alt')->nullable();
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_works_category', function($table)
    {
        $table->dropColumn('image');
        $table->dropColumn('image_alt');
    });
}
}
