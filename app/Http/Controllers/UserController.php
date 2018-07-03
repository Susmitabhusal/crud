<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
   public function index()
   {
   $users=User::all();
   return view('users.index', compact('users'));

}

	public function show($id)
	{
		$users= User::find($id);
		//return $users;
		return view ('users.show',compact('users'));

	}
}
