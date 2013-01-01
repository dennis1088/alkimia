<?php

class Add_Admin_To_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'email' => 'lsualkimia@gmail.com',
			'password' => Hash::make('cayugakyo4')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('email', '=', 'lsualkimia@gmail.com')->delete();
	}

}