<?php namespace Beeldr\Tulpen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrTulpenHome2 extends Migration
{
    public function up()
    {
        Schema::table('beeldr_tulpen_home', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_tulpen_home', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
