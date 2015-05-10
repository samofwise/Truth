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

		Schema::create('contributers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('password', 60);
			$table->boolean('admin');

			$table->foreign('user_id')->references('id')->on('users');
		});

		Schema::create('viewers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');

			$table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('contributers');
		Schema::drop('viewers');
	}

}
