<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcitiesRiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcities_ri', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('subcity_id')->unsigned()->index('subcity_id');
			$table->bigInteger('indicator_id')->unsigned()->index('indicator_id');
			$table->string('subcity_value');
			$table->string('risk_index_infection');
			$table->string('risk_index_hospital');
			$table->string('risk_index_death');
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->bigInteger('updated_by')->unsigned()->index('updated_by');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subcities_ri');
	}

}
