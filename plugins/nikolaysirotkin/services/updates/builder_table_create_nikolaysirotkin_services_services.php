<?php namespace NikolaySirotkin\Services\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinServicesServices extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_services_services', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('image');
        $table->string('headline');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_services_services');
}
}
