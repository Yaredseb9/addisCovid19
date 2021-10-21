<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KetenaRi
 * 
 * @property int $id
 * @property int $ketena_id
 * @property int $indicator_id
 * @property string $value
 * @property string $risk_index_infection
 * @property string $risk_index_hospital
 * @property string $risk_index_death
 * @property Carbon $updated_at
 * @property int|null $updated_by
 * 
 * @property Indicator $indicator
 * @property Ketena $ketena
 * @property User|null $user
 *
 * @package App\Models
 */
class KetenaRi extends Model
{
	protected $table = 'ketena_ri';
	public $timestamps = false;

	protected $casts = [
		'ketena_id' => 'int',
		'indicator_id' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'ketena_id',
		'indicator_id',
		'value',
		'risk_index_infection',
		'risk_index_hospital',
		'risk_index_death',
		'updated_by'
	];

	public function indicator()
	{
		return $this->belongsTo(Indicator::class);
	}

	public function ketena()
	{
		return $this->belongsTo(Ketena::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}
}
