<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingdataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settingdata', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->float('typeSetting', 10, 0)->nullable();
			$table->float('avgSpace', 10, 0)->nullable();
			$table->float('popDen', 10, 0)->nullable();
			$table->float('noIndividual', 10, 0)->nullable();
			$table->float('noMale', 10, 0)->nullable();
			$table->float('noFemale', 10, 0)->nullable();
			$table->float('noDiag', 10, 0)->nullable();
			$table->float('noAgeGreter', 10, 0)->nullable();
			$table->float('guidDoc', 10, 0)->nullable();
			$table->float('contTrac', 10, 0)->nullable();
			$table->float('protocol', 10, 0)->nullable();
			$table->float('moh', 10, 0)->nullable();
			$table->float('empWithSypm', 10, 0)->nullable();
			$table->float('empSick', 10, 0)->nullable();
			$table->float('educatedAboutSteps', 10, 0)->nullable();
			$table->float('educatedAboutSocialD', 10, 0)->nullable();
			$table->float('visitors', 10, 0)->nullable();
			$table->float('trainEmpOnUse', 10, 0)->nullable();
			$table->float('covidCoordinator', 10, 0)->nullable();
			$table->float('increasePhysicalSpace', 10, 0)->nullable();
			$table->float('increasePhysicalSpaceBetween', 10, 0)->nullable();
			$table->float('adquatePpe', 10, 0)->nullable();
			$table->float('provideTissues', 10, 0)->nullable();
			$table->float('handSani', 10, 0)->nullable();
			$table->float('hungPosters', 10, 0)->nullable();
			$table->float('cleanAndDisinfect', 10, 0)->nullable();
			$table->float('disposableWipes', 10, 0)->nullable();
			$table->float('workplaceClean', 10, 0)->nullable();
			$table->float('systemsToNotify', 10, 0)->nullable();
			$table->float('isolationPeriod', 10, 0)->nullable();
			$table->float('inpersonMettings', 10, 0)->nullable();
			$table->smallInteger('status')->default(0);
			$table->bigInteger('userId')->unsigned()->index('userId');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settingdata');
	}

}
