<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Data
 * 
 * @property int $id
 * @property int $indicator_id
 * @property int|null $ketena_id
 * @property int|null $subcity_id
 * @property int|null $woreda_id
 * @property string|null $value
 * @property string|null $risk_index_infection
 * @property string|null $risk_index_hospital
 * @property string|null $risk_index_death
 * @property int|null $user_id
 * @property string|null $pationt
 * @property int|null $office_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Indicator $indicator
 * @property Subcity|null $subcity
 * @property Office|null $office
 * @property Woreda|null $woreda
 * @property User|null $user
 * @property Ketena|null $ketena
 *
 * @package App\Models
 */
class Data extends Model
{
	protected $table = 'data';

	protected $casts = [
		'indicator_id' => 'int',
		'ketena_id' => 'int',
		'subcity_id' => 'int',
		'woreda_id' => 'int',
		'user_id' => 'int',
		'office_id' => 'int'
	];

	protected $fillable = [
		'indicator_id',
		'ketena_id',
		'subcity_id',
		'woreda_id',
		'value',
		'risk_index_infection',
		'risk_index_hospital',
		'risk_index_death',
		'user_id',
		'pationt',
		'office_id'
	];

	public function indicator()
	{
		return $this->belongsTo(Indicator::class);
	}

	public function subcity()
	{
		return $this->belongsTo(Subcity::class);
	}

	public function office()
	{
		return $this->belongsTo(Office::class);
	}

	public function woreda()
	{
		return $this->belongsTo(Woreda::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function ketena()
	{
		return $this->belongsTo(Ketena::class);
	}
}
