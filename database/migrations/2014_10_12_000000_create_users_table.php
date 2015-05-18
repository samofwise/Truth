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
            //User
			$table->increments('id');
            $table->rememberToken();
            $table->timestamps();
            //Fillable
            $table->string('displayName');
            $table->string('email')->unique();
            $table->boolean('contributor');

            //Contributor
            $table->boolean('admin');
            //Fillable
			$table->string('name');
            $table->string('password', 60);


            //Viewer
            $table->boolean('blockedViewer');

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
