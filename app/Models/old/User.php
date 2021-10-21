<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
 * @property int|null $assiged_at
 * 
 * @property Woreda|null $woreda
 * @property Collection|Data[] $data
 * @property Collection|Indicator[] $indicators
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'assiged_at' => 'int'
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
}