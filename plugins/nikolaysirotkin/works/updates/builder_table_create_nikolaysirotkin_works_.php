<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinWorks extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_works_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title');
        $table->text('description');
        $table->string('image');
        $table->boolean('is_active')->default(1);
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_works_');
}
}
