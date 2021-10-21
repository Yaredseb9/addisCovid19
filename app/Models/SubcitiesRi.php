<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubcitiesRi
 * 
 * @property int $id
 * @property int $subcity_id
 * @property int $indicator_id
 * @property string $subcity_value
 * @property string $risk_index_infection
 * @property string $risk_index_hospital
 * @property string $risk_index_death
 * @property Carbon $updated_at
 * @property int $updated_by
 * 
 * @property Indicator $indicator
 * @property User $user
 * @property Subcity $subcity
 *
 * @package App\Models
 */
class SubcitiesRi extends Model
{
	protected $table = 'subcities_ri';
	public $timestamps = false;

	protected $casts = [
		'subcity_id' => 'int',
		'indicator_id' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'subcity_id',
		'indicator_id',
		'subcity_value',
		'risk_index_infection',
		'risk_index_hospital',
		'risk_index_death',
		'updated_by'
	];

	public function indicator()
	{
		return $this->belongsTo(Indicator::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

	public function subcity()
	{
		return $this->belongsTo(Subcity::class);
	}
}
