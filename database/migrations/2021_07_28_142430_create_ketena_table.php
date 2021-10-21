<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetenaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ketena', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('ketana_name', 50);
			$table->bigInteger('woreda_id')->unsigned()->nullable()->index('woreda_id');
			$table->bigInteger('subcity_id')->unsigned()->nullable()->index('subcity_id');
			$table->string('population', 500)->default('0');
			$table->string('area');
			$table->string('hh');
			$table->string('adult');
			$table->string('review', 50);
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
		Schema::drop('ketena');
	}

}
