<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcity
 * 
 * @property int $id
 * @property string $subcity_name
 * @property string $review
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Data[] $data
 * @property Collection|Ketena[] $ketenas
 * @property Collection|Woreda[] $woredas
 *
 * @package App\Models
 */
class Subcity extends Model
{
	protected $table = 'subcities';

	protected $fillable = [
		'subcity_name',
		'review'
	];

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
		return $this->hasMany(User::class);
	}

	public function woredas()
	{
		return $this->hasMany(Woreda::class);
	}
}
