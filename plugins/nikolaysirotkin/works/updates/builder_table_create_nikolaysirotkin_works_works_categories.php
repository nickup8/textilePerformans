<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinWorksWorksCategories extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_works_works_categories', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('work_id');
        $table->integer('category_id');
        $table->primary(['work_id','category_id']);
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_works_works_categories');
}
}
