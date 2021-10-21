<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Office
 * 
 * @property int $id
 * @property int $office-name
 * @property int $office-location
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Data[] $data
 *
 * @package App\Models
 */
class Office extends Model
{
	protected $table = 'offices';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'office-name' => 'int',
		'office-location' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'office-name',
		'office-location',
		'user_id'
	];

	public function data()
	{
		return $this->hasMany(Data::class);
	}
}
