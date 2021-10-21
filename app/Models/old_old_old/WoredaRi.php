<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WoredaRi
 * 
 * @property int $id
 * @property int $woreda_id
 * @property int $indicator_id
 * @property string $woreda_value
 * @property string $risk_index_infection
 * @property string $risk_index_hospital
 * @property string $risk_index_death
 * @property int $RI
 * @property float $woreda_max
 * @property float $woreda_min
 * @property string $vulnerability
 * @property int $updated_by
 * @property Carbon $updated_on
 * 
 * @property Woreda $woreda
 * @property Indicator $indicator
 * @property User $user
 *
 * @package App\Models
 */
class WoredaRi extends Model
{
	protected $table = 'woreda_ri';
	public $timestamps = false;

	protected $casts = [
		'woreda_id' => 'int',
		'indicator_id' => 'int',
		'RI' => 'int',
		'woreda_max' => 'float',
		'woreda_min' => 'float',
		'updated_by' => 'int'
	];

	protected $dates = [
		'updated_on'
	];

	protected $fillable = [
		'woreda_id',
		'indicator_id',
		'woreda_value',
		'risk_index_infection',
		'risk_index_hospital',
		'risk_index_death',
		'RI',
		'woreda_max',
		'woreda_min',
		'vulnerability',
		'updated_by',
		'updated_on'
	];

	public function woreda()
	{
		return $this->belongsTo(Woreda::class);
	}

	public function indicator()
	{
		return $this->belongsTo(Indicator::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}
}
