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
			$table->bigInteger('id', true);
			$table->bigInteger('woreda_id')->unsigned()->unique('woreda_id');
			$table->string('RI', 500)->default('0');
			$table->float('woreda_max', 10, 0)->default(0);
			$table->float('woreda_min', 10, 0)->default(0);
			$table->string('vulnerability', 50);
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
