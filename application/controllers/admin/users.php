<?php

class Admin_Users_Controller extends Base_Controller
{
	public $restful = true;

	public function get_index() {
		return View::make('admin.users.index');
	}
}