<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoredaRiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('woreda_ri', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('woreda_id')->unsigned()->index('woreda_id');
			$table->bigInteger('indicator_id')->unsigned()->index('indicator_id');
			$table->string('woreda_value');
			$table->string('risk_index_infection');
			$table->string('risk_index_hospital');
			$table->string('risk_index_death');
			$table->integer('RI');
			$table->float('woreda_max', 10, 0);
			$table->float('woreda_min', 10, 0);
			$table->string('vulnerability');
			$table->bigInteger('updated_by')->unsigned()->index('updated_by');
			$table->timestamp('updated_on')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('woreda_ri');
	}

}
