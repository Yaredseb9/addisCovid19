<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Settingdatum
 * 
 * @property int $id
 * @property float|null $typeSetting
 * @property float|null $avgSpace
 * @property float|null $popDen
 * @property float|null $noIndividual
 * @property float|null $noMale
 * @property float|null $noFemale
 * @property float|null $noDiag
 * @property float|null $noAgeGreter
 * @property float|null $guidDoc
 * @property float|null $contTrac
 * @property float|null $protocol
 * @property float|null $moh
 * @property float|null $empWithSypm
 * @property float|null $empSick
 * @property float|null $educatedAboutSteps
 * @property float|null $educatedAboutSocialD
 * @property float|null $visitors
 * @property float|null $trainEmpOnUse
 * @property float|null $covidCoordinator
 * @property float|null $increasePhysicalSpace
 * @property float|null $increasePhysicalSpaceBetween
 * @property float|null $adquatePpe
 * @property float|null $provideTissues
 * @property float|null $handSani
 * @property float|null $hungPosters
 * @property float|null $cleanAndDisinfect
 * @property float|null $disposableWipes
 * @property float|null $workplaceClean
 * @property float|null $systemsToNotify
 * @property float|null $isolationPeriod
 * @property float|null $inpersonMettings
 * @property int $status
 * @property int $userId
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
		'typeSetting' => 'float',
		'avgSpace' => 'float',
		'popDen' => 'float',
		'noIndividual' => 'float',
		'noMale' => 'float',
		'noFemale' => 'float',
		'noDiag' => 'float',
		'noAgeGreter' => 'float',
		'guidDoc' => 'float',
		'contTrac' => 'float',
		'protocol' => 'float',
		'moh' => 'float',
		'empWithSypm' => 'float',
		'empSick' => 'float',
		'educatedAboutSteps' => 'float',
		'educatedAboutSocialD' => 'float',
		'visitors' => 'float',
		'trainEmpOnUse' => 'float',
		'covidCoordinator' => 'float',
		'increasePhysicalSpace' => 'float',
		'increasePhysicalSpaceBetween' => 'float',
		'adquatePpe' => 'float',
		'provideTissues' => 'float',
		'handSani' => 'float',
		'hungPosters' => 'float',
		'cleanAndDisinfect' => 'float',
		'disposableWipes' => 'float',
		'workplaceClean' => 'float',
		'systemsToNotify' => 'float',
		'isolationPeriod' => 'float',
		'inpersonMettings' => 'float',
		'status' => 'int',
		'userId' => 'int'
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
		'status',
		'userId'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
