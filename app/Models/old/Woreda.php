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
 * @property int $subcity_id
 * @property string $review
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Subcity $subcity
 * @property Collection|Data[] $data
 * @property Collection|Ketena[] $ketenas
 * @property Collection|User[] $users
 * @property WoredaRi $woreda_ri
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

	public function woreda_ri()
	{
		return $this->hasOne(WoredaRi::class);
	}
}
