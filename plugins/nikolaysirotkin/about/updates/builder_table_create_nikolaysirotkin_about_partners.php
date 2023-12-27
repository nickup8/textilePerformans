<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinAboutPartners extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_about_partners', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('image');
        $table->text('image_alt');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_about_partners');
}
}
