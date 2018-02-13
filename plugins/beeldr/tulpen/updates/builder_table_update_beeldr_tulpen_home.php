<?php namespace Beeldr\Tulpen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeeldrTulpenHome extends Migration
{
    public function up()
    {
        Schema::table('beeldr_tulpen_home', function($table)
        {
            $table->dropColumn('poster_image');
        });
    }
    
    public function down()
    {
        Schema::table('beeldr_tulpen_home', function($table)
        {
            $table->text('poster_image');
        });
    }
}
