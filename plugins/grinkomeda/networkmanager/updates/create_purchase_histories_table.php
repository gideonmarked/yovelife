<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePurchaseHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_purchase_histories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('account_id');
            $table->integer('head_id');
            $table->integer('package_id');
            $table->string('ticket_code',7);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_purchase_histories');
    }
}
