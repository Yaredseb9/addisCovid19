<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Settingdatum
 * 
 * @property int $id
 * @property string|null $typeSetting
 * @property string|null $avgSpace
 * @property string|null $popDen
 * @property string|null $noIndividual
 * @property string|null $noMale
 * @property string|null $noFemale
 * @property string|null $noDiag
 * @property string|null $noAgeGreter
 * @property string|null $guidDoc
 * @property string|null $contTrac
 * @property string|null $protocol
 * @property string|null $moh
 * @property string|null $empWithSypm
 * @property string|null $empSick
 * @property string|null $educatedAboutSteps
 * @property string|null $educatedAboutSocialD
 * @property string|null $visitors
 * @property string|null $trainEmpOnUse
 * @property string|null $covidCoordinator
 * @property string|null $increasePhysicalSpace
 * @property string|null $increasePhysicalSpaceBetween
 * @property string|null $adquatePpe
 * @property string|null $provideTissues
 * @property string|null $handSani
 * @property string|null $hungPosters
 * @property string|null $cleanAndDisinfect
 * @property string|null $disposableWipes
 * @property string|null $workplaceClean
 * @property string|null $systemsToNotify
 * @property string|null $isolationPeriod
 * @property string|null $inpersonMettings
 * @property string $ri_infection
 * @property string $ri_hospitalization
 * @property string $ri_death
 * @property string $level_ri_infection
 * @property string $level_ri_hospitalization
 * @property string $level_ri_death
 * @property int $status
 * @property int $userId
 * @property Carbon $calculated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Settingdatum extends Model
{
	protected $table = 'settingdata';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'userId' => 'int'
	];

	protected $dates = [
		'calculated_at'
	];

	protected $fillable = [
		'typeSetting',
		'avgSpace',
		'popDen',
		'noIndividual',
		'noMale',
		'noFemale',
		'noDiag',
		'noAgeGreter',
		'guidDoc',
		'contTrac',
		'protocol',
		'moh',
		'empWithSypm',
		'empSick',
		'educatedAboutSteps',
		'educatedAboutSocialD',
		'visitors',
		'trainEmpOnUse',
		'covidCoordinator',
		'increasePhysicalSpace',
		'increasePhysicalSpaceBetween',
		'adquatePpe',
		'provideTissues',
		'handSani',
		'hungPosters',
		'cleanAndDisinfect',
		'disposableWipes',
		'workplaceClean',
		'systemsToNotify',
		'isolationPeriod',
		'inpersonMettings',
		'ri_infection',
		'ri_hospitalization',
		'ri_death',
		'level_ri_infection',
		'level_ri_hospitalization',
		'level_ri_death',
		'status',
		'userId',
		'calculated_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
