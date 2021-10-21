<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubcitiesRiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subcities_ri', function(Blueprint $table)
		{
			$table->foreign('indicator_id', 'subcities_ri_ibfk_1')->references('id')->on('indicators')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('updated_by', 'subcities_ri_ibfk_2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('subcity_id', 'subcities_ri_ibfk_3')->references('id')->on('subcities')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subcities_ri', function(Blueprint $table)
		{
			$table->dropForeign('subcities_ri_ibfk_1');
			$table->dropForeign('subcities_ri_ibfk_2');
			$table->dropForeign('subcities_ri_ibfk_3');
		});
	}

}
