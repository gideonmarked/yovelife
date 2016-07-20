<?php namespace Grinkomeda\NetworkManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFinancesTable extends Migration
{
    public function up()
    {
        Schema::create('_yovelife_finances', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('payee_id');
            $table->integer('payer_id');
            $table->double('amount',15,2);
            $table->string('category',20);
            $table->string('description',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_yovelife_finances');
    }
}
