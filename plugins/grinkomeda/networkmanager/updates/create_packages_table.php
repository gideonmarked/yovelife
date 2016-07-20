<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_packages', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code',7);
            $table->string('description',100);
            $table->string('category',20);
            $table->double('amount',15,2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_packages');
    }
}
