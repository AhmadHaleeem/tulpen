<?php namespace Beeldr\Tulpen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeeldrTulpenHome extends Migration
{
    public function up()
    {
        Schema::create('beeldr_tulpen_home', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('poster_image');
            $table->text('body');
            $table->text('down_text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beeldr_tulpen_home');
    }
}
