<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function admin_login()
	{
		$data['admin_main_content'] = view('pages/admin_index');
		return view('dashboard', $data);
	}

	public function add_student()
	{
		$data['admin_main_content'] = view('pages/add_student');
		return view('dashboard', $data);
	}

	public function manage_student()
	{
		$data['admin_main_content'] = view('pages/manage_student');
		return view('dashboard', $data);
	}

	public function edit_admin()
	{
		$data['admin_main_content'] = view('pages/edit_admin');
		return view('dashboard', $data);
	}


}

