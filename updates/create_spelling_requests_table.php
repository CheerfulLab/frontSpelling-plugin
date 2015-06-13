<?php namespace Haegemon\Frontendspelling\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSpellingRequestsTable extends Migration
{

    public function up()
    {
        Schema::create('haegemon_frontendspelling_spelling_requests', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('haegemon_frontendspelling_spelling_requests');
    }

}
