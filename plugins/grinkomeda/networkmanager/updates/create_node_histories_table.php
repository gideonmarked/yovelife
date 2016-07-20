<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNodeHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_node_histories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('node_id');
            $table->integer('head_id');
            $table->integer('pv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_node_histories');
    }
}
