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
			$table->foreign('woreda_id', 'woreda_ri_ibfk_1')->references('id')->on('woreda')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('indicator_id', 'woreda_ri_ibfk_2')->references('id')->on('indicators')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('updated_by', 'woreda_ri_ibfk_3')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('woreda_ri_ibfk_1');
			$table->dropForeign('woreda_ri_ibfk_2');
			$table->dropForeign('woreda_ri_ibfk_3');
		});
	}

}
