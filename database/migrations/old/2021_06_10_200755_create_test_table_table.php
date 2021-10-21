<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_table', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('tes1', 50);
			$table->bigInteger('tes2')->unsigned();
			$table->date('test3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('test_table');
	}

}
