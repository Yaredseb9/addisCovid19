<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('email')->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->timestamps(10);
			$table->string('role', 50);
			$table->integer('status')->default(1);
			$table->bigInteger('assiged_at')->unsigned()->nullable()->index('assiged_at');
			$table->bigInteger('manage')->unsigned()->nullable()->index('manage');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
