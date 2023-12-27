<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinAboutInfo extends Migration
{
    public function up()
{
    Schema::rename('nikolaysirotkin_about_', 'nikolaysirotkin_about_info');
}

public function down()
{
    Schema::rename('nikolaysirotkin_about_info', 'nikolaysirotkin_about_');
}
}
