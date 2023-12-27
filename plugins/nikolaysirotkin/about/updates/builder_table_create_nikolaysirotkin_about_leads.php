<?php namespace NikolaySirotkin\About\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinAboutLeads extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_about_leads', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('headline');
        $table->text('description');
        $table->string('lead_name');
        $table->string('lead_post');
        $table->string('bg_image');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_about_leads');
}
}
