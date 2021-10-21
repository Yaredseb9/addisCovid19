<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoredaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('woreda', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('woreda_name', 50);
			$table->bigInteger('subcity_id')->unsigned()->index('subcity_id');
			$table->text('review');
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
		Schema::drop('woreda');
	}

}
