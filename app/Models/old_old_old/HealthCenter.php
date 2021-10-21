<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HealthCenter
 * 
 * @property int $id
 * @property int $user_id
 * @property string $hospital_name
 * @property string $catagory
 * @property int $subcity_id
 *
 * @package App\Models
 */
class HealthCenter extends Model
{
	protected $table = 'health_centers';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'subcity_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'hospital_name',
		'catagory',
		'subcity_id'
	];
}
