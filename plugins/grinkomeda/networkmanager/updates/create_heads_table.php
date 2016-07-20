<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHeadsTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_heads', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('head_id');
            $table->integer('parent_id');
            $table->boolean('shadow');
            $table->integer('left_pv');
            $table->integer('right_pv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_heads');
    }
}
