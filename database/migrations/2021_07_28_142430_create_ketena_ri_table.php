<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetenaRiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ketena_ri', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('ketena_id')->unsigned()->index('ketena_id');
			$table->bigInteger('indicator_id')->unsigned()->index('indicator_id');
			$table->string('value');
			$table->string('risk_index_infection', 500)->default('0');
			$table->string('risk_index_hospital', 500)->default('0');
			$table->string('risk_index_death', 500)->default('0');
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->bigInteger('updated_by')->unsigned()->nullable()->index('updated_by');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ketena_ri');
	}

}
