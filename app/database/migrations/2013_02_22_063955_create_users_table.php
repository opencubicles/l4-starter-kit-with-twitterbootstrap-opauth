<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{   
                    $table->engine = 'InnoDB';
                    $table->increments('id');
                    $table->string('username')->unique()->nullable();
                    $table->string('email')->unique()->nullable();
                    $table->string('password')->nullable();
                    $table->string('confirmation_code')->nullable();
                    $table->boolean('confirmed')->default(false)->nullable();
                    $table->timestamps();
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