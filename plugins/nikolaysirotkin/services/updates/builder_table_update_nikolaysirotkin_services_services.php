<?php namespace NikolaySirotkin\Services\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNikolaysirotkinServicesServices extends Migration
{
    public function up()
{
    Schema::table('nikolaysirotkin_services_services', function($table)
    {
        $table->boolean('is_active')->nullable();
    });
}

public function down()
{
    Schema::table('nikolaysirotkin_services_services', function($table)
    {
        $table->dropColumn('is_active');
    });
}
}
