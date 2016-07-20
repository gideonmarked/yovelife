<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_profiles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('account_id');
            $table->string('title',20);
            $table->string('firstname',100);
            $table->string('middlename',100);
            $table->string('lastname',100);
            $table->string('extension',20);
            $table->string('address',255);
            $table->integer('mobile_number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_profiles');
    }
}
