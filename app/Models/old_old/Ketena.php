<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ketena
 * 
 * @property int $id
 * @property string $ketana_name
 * @property int|null $woreda_id
 * @property int|null $subcity_id
 * @property string $review
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Subcity|null $subcity
 * @property Woreda|null $woreda
 * @property Collection|Data[] $data
 *
 * @package App\Models
 */
class Ketena extends Model
{
	protected $table = 'ketena';

	protected $casts = [
		'woreda_id' => 'int',
		'subcity_id' => 'int'
	];

	protected $fillable = [
		'ketana_name',
		'woreda_id',
		'subcity_id',
		'review'
	];

	public function subcity()
	{
		return $this->belongsTo(Subcity::class);
	}

	public function woreda()
	{
		return $this->belongsTo(Woreda::class);
	}

	public function data()
	{
		return $this->hasMany(Data::class);
	}
}
