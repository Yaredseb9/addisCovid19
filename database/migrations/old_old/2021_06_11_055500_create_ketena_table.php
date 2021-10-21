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
			$table->bigInteger('subcity_id')->unsigned()->index('subcity_id');
			$table->bigInteger('woreda_id')->unsigned()->index('woreda_id');
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
