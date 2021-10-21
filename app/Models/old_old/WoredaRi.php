<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WoredaRi
 * 
 * @property int $id
 * @property int $woreda_id
 * @property string $RI
 * @property float $woreda_max
 * @property float $woreda_min
 * @property string $vulnerability
 * 
 * @property Woreda $woreda
 *
 * @package App\Models
 */
class WoredaRi extends Model
{
	protected $table = 'woreda_ri';
	public $timestamps = false;

	protected $casts = [
		'woreda_id' => 'int',
		'woreda_max' => 'float',
		'woreda_min' => 'float'
	];

	protected $fillable = [
		'woreda_id',
		'RI',
		'woreda_max',
		'woreda_min',
		'vulnerability'
	];

	public function woreda()
	{
		return $this->belongsTo(Woreda::class);
	}
}
