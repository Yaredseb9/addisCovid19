<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $role
 * @property int $status
 * @property int|null $assiged_at
 * @property int|null $manage
 * 
 * @property Woreda|null $woreda
 * @property Subcity|null $subcity
 * @property Collection|Data[] $data
 * @property Collection|Indicator[] $indicators
 * @property Collection|KetenaRi[] $ketena_ris
 * @property Collection|Settingdatum[] $settingdata
 * @property Collection|SubcitiesRi[] $subcities_ris
 * @property Collection|WoredaRi[] $woreda_ris
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'status' => 'int',
		'assiged_at' => 'int',
		'manage' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'role',
		'status',
		'assiged_at',
		'manage'
	];

	public function woreda()
	{
		return $this->belongsTo(Woreda::class, 'assiged_at');
	}

	public function subcity()
	{
		return $this->belongsTo(Subcity::class, 'manage');
	}

	public function data()
	{
		return $this->hasMany(Data::class);
	}

	public function indicators()
	{
		return $this->hasMany(Indicator::class);
	}

	public function ketena_ris()
	{
		return $this->hasMany(KetenaRi::class, 'updated_by');
	}

	public function settingdata()
	{
		return $this->hasMany(Settingdatum::class, 'userId');
	}

	public function subcities_ris()
	{
		return $this->hasMany(SubcitiesRi::class, 'updated_by');
	}

	public function woreda_ris()
	{
		return $this->hasMany(WoredaRi::class, 'updated_by');
	}
}
