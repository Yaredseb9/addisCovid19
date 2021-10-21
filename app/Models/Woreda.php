<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Woreda
 * 
 * @property int $id
 * @property string $woreda_name
 * @property string $population
 * @property string $area
 * @property string $hh
 * @property string $adult
 * @property int $subcity_id
 * @property string $review
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Subcity $subcity
 * @property Collection|Data[] $data
 * @property Collection|Ketena[] $ketenas
 * @property Collection|User[] $users
 * @property Collection|WoredaRi[] $woreda_ris
 *
 * @package App\Models
 */
class Woreda extends Model
{
	protected $table = 'woreda';

	protected $casts = [
		'subcity_id' => 'int'
	];

	protected $fillable = [
		'woreda_name',
		'population',
		'area',
		'hh',
		'adult',
		'subcity_id',
		'review'
	];

	public function subcity()
	{
		return $this->belongsTo(Subcity::class);
	}

	public function data()
	{
		return $this->hasMany(Data::class);
	}

	public function ketenas()
	{
		return $this->hasMany(Ketena::class);
	}

	public function users()
	{
		return $this->hasMany(User::class, 'assiged_at');
	}

	public function woreda_ris()
	{
		return $this->hasMany(WoredaRi::class);
	}
}
