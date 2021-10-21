<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKetenaRiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ketena_ri', function(Blueprint $table)
		{
			$table->foreign('indicator_id', 'ketena_ri_ibfk_1')->references('id')->on('indicators')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ketena_id', 'ketena_ri_ibfk_2')->references('id')->on('ketena')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('updated_by', 'ketena_ri_ibfk_3')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ketena_ri', function(Blueprint $table)
		{
			$table->dropForeign('ketena_ri_ibfk_1');
			$table->dropForeign('ketena_ri_ibfk_2');
			$table->dropForeign('ketena_ri_ibfk_3');
		});
	}

}
