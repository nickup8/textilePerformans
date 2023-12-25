<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinWorksCategory extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_works_category', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title');
        $table->string('slug');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_works_category');
}
}
