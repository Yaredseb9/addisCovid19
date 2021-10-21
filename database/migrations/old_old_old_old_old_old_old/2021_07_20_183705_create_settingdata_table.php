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
			$table->string('typeSetting')->nullable();
			$table->string('avgSpace')->nullable();
			$table->string('popDen')->nullable();
			$table->string('noIndividual')->nullable();
			$table->string('noMale')->nullable();
			$table->string('noFemale')->nullable();
			$table->string('noDiag')->nullable();
			$table->string('noAgeGreter')->nullable();
			$table->string('guidDoc')->nullable();
			$table->string('contTrac')->nullable();
			$table->string('protocol')->nullable();
			$table->string('moh')->nullable();
			$table->string('empWithSypm')->nullable();
			$table->string('empSick')->nullable();
			$table->string('educatedAboutSteps')->nullable();
			$table->string('educatedAboutSocialD')->nullable();
			$table->string('visitors')->nullable();
			$table->string('trainEmpOnUse')->nullable();
			$table->string('covidCoordinator')->nullable();
			$table->string('increasePhysicalSpace')->nullable();
			$table->string('increasePhysicalSpaceBetween')->nullable();
			$table->string('adquatePpe')->nullable();
			$table->string('provideTissues')->nullable();
			$table->string('handSani')->nullable();
			$table->string('hungPosters')->nullable();
			$table->string('cleanAndDisinfect')->nullable();
			$table->string('disposableWipes')->nullable();
			$table->string('workplaceClean')->nullable();
			$table->string('systemsToNotify')->nullable();
			$table->string('isolationPeriod')->nullable();
			$table->string('inpersonMettings')->nullable();
			$table->string('ri_infection');
			$table->string('ri_hospitalization');
			$table->string('ri_death');
			$table->string('level_ri_infection');
			$table->string('level_ri_hospitalization');
			$table->string('level_ri_death');
			$table->smallInteger('status')->default(0);
			$table->bigInteger('userId')->unsigned()->index('userId');
			$table->timestamp('calculated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
