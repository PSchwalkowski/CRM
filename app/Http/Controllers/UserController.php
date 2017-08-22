<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
	
	/**
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('users.index', ['users' => User::limit(10)->get()]);
	}
}
