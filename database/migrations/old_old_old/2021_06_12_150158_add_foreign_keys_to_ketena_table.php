<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKetenaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ketena', function(Blueprint $table)
		{
			$table->foreign('subcity_id', 'ketena_ibfk_1')->references('id')->on('subcities')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('woreda_id', 'ketena_ibfk_2')->references('id')->on('woreda')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ketena', function(Blueprint $table)
		{
			$table->dropForeign('ketena_ibfk_1');
			$table->dropForeign('ketena_ibfk_2');
		});
	}

}
