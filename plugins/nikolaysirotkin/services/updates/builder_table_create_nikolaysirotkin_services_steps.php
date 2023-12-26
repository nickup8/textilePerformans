<?php namespace NikolaySirotkin\Services\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNikolaysirotkinServicesSteps extends Migration
{
    public function up()
{
    Schema::create('nikolaysirotkin_services_steps', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title');
        $table->text('description');
    });
}

public function down()
{
    Schema::dropIfExists('nikolaysirotkin_services_steps');
}
}
