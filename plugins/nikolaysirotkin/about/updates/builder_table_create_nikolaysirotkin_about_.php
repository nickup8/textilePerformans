<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinAbout extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_about_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('headline');
        $table->text('description');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_about_');
}
}
