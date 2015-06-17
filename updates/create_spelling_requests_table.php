<?php namespace CheerfulLab\Frontendspelling\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSpellingRequestsTable extends Migration
{

    public function up()
    {
        Schema::create('cheerfullab_frontendspelling_spelling_requests', function ($table) {
            Schema::dropIfExists('cheerfullab_frontendspelling_spelling_requests');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('url', 1024);
            $table->text('text');
            $table->text('comment');
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cheerfullab_frontendspelling_spelling_requests');
    }

}
