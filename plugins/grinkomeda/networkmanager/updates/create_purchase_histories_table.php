<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePurchaseHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('grinkomeda_networkmanager_purchase_histories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_networkmanager_purchase_histories');
    }
}
