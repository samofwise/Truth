<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::create('users_contributors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('password', 60);
			$table->boolean('admin');

		});

		Schema::create('users_viewers', function(Blueprint $table)
		{
			$table->increments('id');

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
		Schema::drop('users_contributors');
		Schema::drop('users_viewers');
	}

}
