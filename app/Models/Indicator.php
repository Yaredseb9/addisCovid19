<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicator
 * 
 * @property int $id
 * @property string $name
 * @property string $discription
 * @property string $catagory
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $user_id
 * 
 * @property User $user
 * @property Collection|Data[] $data
 * @property Collection|KetenaRi[] $ketena_ris
 * @property Collection|SubcitiesRi[] $subcities_ris
 * @property Collection|WoredaRi[] $woreda_ris
 *
 * @package App\Models
 */
class Indicator extends Model
{
	protected $table = 'indicators';

	protected $casts = [
		'status' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'discription',
		'catagory',
		'status',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function data()
	{
		return $this->hasMany(Data::class);
	}

	public function ketena_ris()
	{
		return $this->hasMany(KetenaRi::class);
	}

	public function subcities_ris()
	{
		return $this->hasMany(SubcitiesRi::class);
	}

	public function woreda_ris()
	{
		return $this->hasMany(WoredaRi::class);
	}
}
