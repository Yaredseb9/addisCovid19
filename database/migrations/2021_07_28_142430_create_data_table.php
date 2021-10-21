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
			$table->bigInteger('indicator_id')->unsigned()->index('idicator_id');
			$table->bigInteger('ketena_id')->unsigned()->nullable()->index('ketena_id');
			$table->bigInteger('subcity_id')->unsigned()->nullable()->index('C2');
			$table->bigInteger('woreda_id')->unsigned()->nullable()->index('C4');
			$table->string('value')->nullable()->default('0');
			$table->string('risk_index_infection')->nullable()->default('unavailable');
			$table->string('risk_index_hospital')->nullable()->default('unavailable');
			$table->string('risk_index_death')->nullable()->default('unavailable');
			$table->bigInteger('user_id')->unsigned()->nullable()->index('C5');
			$table->string('pationt', 50)->nullable();
			$table->bigInteger('office_id')->unsigned()->nullable()->index('C3');
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
