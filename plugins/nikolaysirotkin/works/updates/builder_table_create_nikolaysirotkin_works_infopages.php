<?php namespace NikolaySirotkin\Works\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinWorksInfopages extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_works_infopages', function($table)
    {
        $table->engine = 'InnoDB';
        $table->string('headline');
        $table->text('description');
        $table->string('cta_headline');
        $table->text('cta_description');
        $table->string('cta_button_text');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_works_infopages');
}
}
