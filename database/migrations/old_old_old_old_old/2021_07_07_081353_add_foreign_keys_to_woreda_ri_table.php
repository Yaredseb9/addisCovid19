<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWoredaRiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('woreda_ri', function(Blueprint $table)
		{
			$table->foreign('woreda_id', 'woreda_ri_ibfk_2')->references('id')->on('woreda')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('woreda_ri', function(Blueprint $table)
		{
			$table->dropForeign('woreda_ri_ibfk_2');
		});
	}

}
