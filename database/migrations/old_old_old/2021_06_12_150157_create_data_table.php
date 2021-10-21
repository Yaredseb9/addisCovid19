<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('idicator_id')->unsigned()->index('idicator_id');
			$table->bigInteger('ketena_id')->unsigned()->nullable()->index('ketena_id');
			$table->bigInteger('subcity_id')->unsigned()->default(0)->index('C2');
			$table->bigInteger('woreda_id')->unsigned()->nullable()->default(0)->index('C4');
			$table->string('value', 50);
			$table->bigInteger('user_id')->unsigned()->index('C5');
			$table->string('pationt', 50);
			$table->bigInteger('office_id')->unsigned()->nullable()->default(0)->index('C3');
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data');
	}

}
