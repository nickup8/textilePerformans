<?php namespace NikolaySirotkin\Services\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinServicesInfopages extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_services_infopages', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('headline');
        $table->text('description');
        $table->string('title_image');
        $table->string('cta_headline');
        $table->text('cta_description');
        $table->string('cta_button_text');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_services_infopages');
}
}
