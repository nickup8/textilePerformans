<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinWorksHome extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_works_home', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title');
        $table->text('description');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_works_home');
}
}
