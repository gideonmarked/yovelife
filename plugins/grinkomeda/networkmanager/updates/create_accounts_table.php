`<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_accounts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('code,7');
            $table->string('leader_code,7');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_accounts');
    }
}
