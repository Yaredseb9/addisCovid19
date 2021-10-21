<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('data', function(Blueprint $table)
		{
			$table->foreign('idicator_id', 'C1')->references('id')->on('indicators')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('subcity_id', 'C2')->references('id')->on('subcities')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('office_id', 'C3')->references('id')->on('offices')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('woreda_id', 'C4')->references('id')->on('woreda')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'C5')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ketena_id', 'data_ibfk_1')->references('id')->on('ketena')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('data', function(Blueprint $table)
		{
			$table->dropForeign('C1');
			$table->dropForeign('C2');
			$table->dropForeign('C3');
			$table->dropForeign('C4');
			$table->dropForeign('C5');
			$table->dropForeign('data_ibfk_1');
		});
	}

}
